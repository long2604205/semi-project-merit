<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserFormType;
use App\Form\UserEditFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\User\UserInterface;




class UserController extends AbstractController
{

    private $em;
    private $userRepository;
    public function __construct(EntityManagerInterface $em, UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->em = $em;
    }

    // List User
    #[Route('/admin/user', name: 'app_user')]
    public function index(): Response
    {
        // $user = $doctrine->getRepository(User::class)->findAll();
        $user = $this->userRepository->findAll();


        return $this->render('admin/user/list.html.twig', [
            'controller_name' => 'UserController',
            'user' => $user,
            'title' => 'List of User',
        ]);
    }



    // Create User
    #[Route('/admin/user/create', name: 'user_create')]
    public function create(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User;
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newUser = $form->getData();
            // dd($newUser);
            // exit();

            $newUser->setPassword(
                $userPasswordHasher->hashPassword(
                    $newUser,
                    $form->get('password')->getData()
                )
            );

            $imagePath = $form->get('image')->getData();
            if ($imagePath) {
                $newFileName = uniqid() . '.' . $imagePath->guessExtension();

                try {
                    //code...
                    $imagePath->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads',
                        $newFileName
                    );
                } catch (FileException $e) {
                    //throw $th;
                    return new Response($e->getMessage());
                }
                $newUser->setImage('/uploads/' . $newFileName);
            }

            $this->em->persist($newUser);
            $this->em->flush();

            return $this->redirectToRoute('app_user');
        }

        return $this->render('admin/user/form.html.twig', [
            'controller_name' => 'UserController',
            'title' => 'ADD NEW USER',
            'form' => $form->createView()
        ]);
    }

    // Delete User
    #[Route('/admin/user/delete/{id}', methods: ['GET'], name: 'delete_user')]
    public function destroy($id): Response
    {
        $user = $this->userRepository->find($id);
        $this->em->remove($user);
        $this->em->flush();

        return $this->redirectToRoute('app_user');

        return $this->render('admin/user/list.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    // Profile User
    #[Route('/admin/profile', name: 'app_profile')]
    public function profile(): Response
    {
        return $this->render('admin/user/profile.html.twig', []);
    }

    // Edit User
    #[Route('/admin/user/edit/{id}', name: 'edit_user')]
    public function edit($id, Request $request, UserRepository $users): Response
    {

        $user = $this->userRepository->find($id);

        $form = $this->createForm(UserEditFormType::class, $user);
        $form->handleRequest($request);
        $imagePath = $form->get('image')->getData();
        // dd($form);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($imagePath) {
                $img = $user->getImage();
                if ($img !== null) {
                    // $file = file_exists($this->getParameter('kernel.project_dir') . $actor->getImage());
                    $file = $this->getParameter('kernel.project_dir') . '/public' . $user->getImage();
                    if ($file) {
                        $this->GetParameter('kernel.project_dir') . $user->getImage();
                        $newFileName = uniqid() . '.' . $imagePath->guessExtension();

                        try {
                            //code...
                            $imagePath->move(
                                $this->getParameter('kernel.project_dir') . '/public/uploads',
                                $newFileName
                            );
                        } catch (FileException $e) {
                            //throw $th;
                            return new Response($e->getMessage());
                        }

                        $user->setImage('/uploads/' . $newFileName);
                        $this->em->flush();

                        return $this->redirectToRoute('app_user');
                    }
                }
            } else {
                $user->setName($form->get('name')->getData());
                $user->setUsername($form->get('username')->getData());
                $user->setEmail($form->get('email')->getData());
                $user->setPhone($form->get('phone')->getData());


                $this->em->flush();
                return $this->redirectToRoute('app_user');
            }
            // $user->setImage($imagePath);
            // $users->save($user, true);
            // dd($form);
        }
        return $this->render('admin/user/edit.html.twig', [
            'controller_name' => 'UserController',
            'title' => 'EDIT USER',
            'form' => $form->createView()
        ]);
    }
}
