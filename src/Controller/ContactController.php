<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    private $em;
    private $contactRepository;
    public function __construct(EntityManagerInterface $em, ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
        $this->em = $em;
    }

    #[Route('/admin/manacontact', name: 'client_contact_list')]
    public function index(): Response
    {
        $contact = $this->contactRepository->findAll();
        return $this->render('admin/contact/list.html.twig', [
            'title' => 'List of Contact',
            'contact' => $contact,
        ]);
    }
    //detail
    #[Route('/admin/contact/detail-contact/{id}', name: 'client_contact_detail')]
    public function detail(Contact $contact): Response
    {
        // $detail = $this->contactRepository->find($id);
        // dd($detail);
        return $this->render('admin/contact/detail.html.twig', [
            'detail' => $contact,
        ]);
    }
    //remove
    #[Route('/admin/contact/delete/{id}', name: 'client_contact_remove')]
    public function remove($id): Response
    {
        $contact = $this->contactRepository->find($id);
        $this->em->remove($contact);
        $this->em->flush();
        return $this->redirectToRoute('client_contact_list');
        return $this->render('admin/contact/detail.html.twig', [
            'detail' => $contact,
        ]);
    }
    //Send Contact
    #[Route('/contact', name: 'client_contact')]
    public function send(Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);
        $time = new \DateTime();
        $contact->setTime($time);

        if ($form->isSubmitted() && $form->isValid()) {
            $newContact = $form->getData();

            $this->contactRepository->save($newContact, true);
            return $this->redirectToRoute('client_contact');
        }

        return $this->render('client/contact/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
