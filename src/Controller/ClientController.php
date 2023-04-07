<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Form\SearchFromType;
use App\Repository\ActorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{


    private $em;
    private $actorRepository;
    public function __construct(EntityManagerInterface $em, ActorRepository $actorRepository)
    {
        $this->em = $em;
        $this->actorRepository = $actorRepository;
    }


    #[Route('/', name: 'app_client')]
    public function index(): Response
    {
        $bestactor = $this->actorRepository->findAllRandom();
        $actorUS = $this->actorRepository->findAllByCountry('United States');
        $actorCN = $this->actorRepository->findAllByCountry('China');
        return $this->render('client/system/home.html.twig', [
            'bestactor' => $bestactor,
            'actorUS' => $actorUS,
            'actorCN' => $actorCN,
        ]);
    }
    // #[Route('/actors/find-by-name/{name}', name: 'actor_find_by_name')]
    // public function findByClosestName(ActorRepository $actorRepository, $name): Response
    // {
    //     $actors = $actorRepository->findAllByName($name);

    //     return $this->render('client/system/search.html.twig', [
    //         'actors' => $actors,
    //     ]);
    // }
    #[Route('/mvactors/find-by-name/{name}', name: 'actor_find_by_name')]
    public function findByClosestName(Request $request, ActorRepository $actorRepository): Response
    {
        $form = $this->createForm(SearchFromType::class);
        $form->handleRequest($request);

        $actors = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $searchActor = $form->getData()['searchActor'];
            $actors = $actorRepository->findAllByName($searchActor);
        }

        return $this->render('client/system/search.html.twig', [
            'form' => $form->createView(),
            'actors' => $actors,
            'title' => 'Result',
        ]);
    }
    #[Route('/searchactor', name: 'search_actor')]
    public function testSearch(): Response
    {
        return $this->redirect('/mvactors/find-by-name/{name}');
    }
    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('client/system/about.html.twig', []);
    }

    #[Route('/detail-actor/{id}', name: 'client_detail')]
    public function detail(Actor $actor): Response
    {
        $similar = $this->actorRepository->findAllRandom();
        return $this->render('client/actor/detail.html.twig', [
            'detail' => $actor,
            'actor' => $actor,
            'similar' => $similar,
        ]);
    }
}
