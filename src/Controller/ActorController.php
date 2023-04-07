<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Entity\ImageShare;
use App\Entity\Movie;
use App\Repository\ImageShareRepository;
use App\Repository\ActorRepository;
use App\Form\ActorFormType;
use App\Form\ActorMovieFormType;
use App\Form\EditActorFormType;
use App\Form\ImageFromType;
use App\Form\MovieActorFormType;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;

class ActorController extends AbstractController
{

    private $em;
    private $actorRepository;
    private $imageShareRepository;
    private $movieRepository;
    public function __construct(EntityManagerInterface $em, ActorRepository $actorRepository, ImageShareRepository $imageShareRepository, MovieRepository $movieRepository)
    {
        $this->em = $em;
        $this->actorRepository = $actorRepository;
        $this->imageShareRepository;
        $this->movieRepository = $movieRepository;
    }

    #[Route('/admin/actor', name: 'app_actor')]
    public function index(ActorRepository $actors): Response
    {
        return $this->render('admin/actor/list.html.twig', [
            'controller_name' => 'ActorController',
            'title' => 'List of Actor',
            'actors' => $actors->findAll()
        ]);
    }

    #[Route('/admin/actor/detail/{id}', name: 'app_detail')]
    public function detail(Actor $actor): Response
    {
        // $actor = $this->actorRepository->find($id);
        // $detail = $this->actorRepository->find($id);
        return $this->render('admin/actor/detail.html.twig', [
            'detail' => $actor,
            'actor' => $actor
        ]);
    }


    #[Route('/admin/actor/create', name: 'create_actor')]
    public function create(ManagerRegistry $doctrine, Request $request): Response
    {
        $actor = new Actor();
        $form = $this->createForm(ActorFormType::class, $actor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newActor = $form->getData();
            // dd($newMovie);
            // exit();

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
                $newActor->setImage('/uploads/' . $newFileName);
            }


            $this->em->persist($newActor);
            $this->em->flush();

            return $this->redirectToRoute('app_actor');


            // $em = $doctrine->getManager();
            // $em->persist($actor);
            // $em->flush();
        }

        return $this->render('admin/actor/form.html.twig', [
            'controller_name' => 'ActorCreateController',
            'title' => 'ADD NEW ACTOR',
            'form' => $form->createView(),
        ]);
    }
    #[Route('/admin/actor/addimage/{id}', name: 'app_addimage')]
    public function addimage(Request $request, $id, ImageShareRepository $imageShares): Response
    {
        $actor = $this->actorRepository->find($id);
        $img = new ImageShare();
        $form = $this->createForm(ImageFromType::class, $img);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $newImg = $form->getData();
            // dd($newMovie);
            // exit();

            $imagePath = $form->get('img')->getData();
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
                $newImg->setImg('/uploads/' . $newFileName);
            }

            $imageShare = new ImageShare();
            $imageShare->setActor($actor);
            $imageShare->setImg($newImg->getImg());
            // dd($imageShare);
            $imageShares->save($imageShare, true);

            return $this->redirectToRoute('app_actor');
        }

        return $this->render('admin/actor/addimage.html.twig', [
            'form' => $form->createView(),
            'actor' => $actor,
        ]);
    }


    //delete Actor
    #[Route('/admin/actor/delete/{id}', name: 'app_actordelete')]
    public function delete($id, ImageShareRepository $imageShares): Response
    {
        $actor = $this->actorRepository->find($id);

        $imageShare = new ImageShare;
        $act = $actor->addImageShare($imageShare)->getImageShares();
        // dd($act);

        foreach ($act as $img) {
            // dd($img);
            $this->em->remove($img);
        }
        $this->em->remove($actor);
        $this->em->flush();

        return $this->redirectToRoute('app_actor');
        return $this->render('admin/actor/list.html.twig', []);
    }

    // Edit Actor
    #[Route('/admin/actor/edit/{id}', name: 'edit_actor')]
    public function edit($id, Request $request): Response
    {

        $actor = $this->actorRepository->find($id);

        // dd($actor);        
        $form = $this->createForm(EditActorFormType::class, $actor);
        $form->handleRequest($request);
        $imagePath = $form->get('image')->getData();

        if ($form->isSubmitted() && $form->isValid()) {
            if ($imagePath) {
                $img = $actor->getImage();
                if ($img !== null) {
                    // $file = file_exists($this->getParameter('kernel.project_dir') . $actor->getImage());
                    $file = $this->getParameter('kernel.project_dir') . '/public' . $actor->getImage();
                    if ($file) {
                        $this->GetParameter('kernel.project_dir') . $actor->getImage();
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

                        $actor->setImage('/uploads/' . $newFileName);
                        $this->em->flush();

                        return $this->redirectToRoute('app_actor');
                    }
                }
            } else {
                $actor->setName($form->get('name')->getData());
                $actor->setBirthName($form->get('birthName')->getData());
                $actor->setNickName($form->get('nickName')->getData());
                $actor->setGender($form->get('gender')->getData());
                $actor->setBirth($form->get('birth')->getData());
                $actor->setBorn($form->get('born')->getData());
                $actor->setCountry($form->get('country')->getData());
                $actor->setHeight($form->get('height')->getData());
                $actor->setBiography($form->get('biography')->getData());

                $this->em->flush();
                return $this->redirectToRoute('app_actor');
            }
        }
        return $this->render('admin/actor/edit.html.twig', [
            'controller_name' => 'UserController',
            'title' => 'EDIT ACTOR',
            'form' => $form->createView()
        ]);
    }

    //Add Movie for Actor
    #[Route('/admin/actor/addmovie/{id}', name: 'add_movie')]
    public function addmovie(Request $request, $id, MovieRepository $movieRepository, Actor $actor): Response
    {
        $actor = $this->actorRepository->find($id);
        $movie = new Movie();
        $form = $this->createForm(MovieActorFormType::class, $movie);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $newMovie = $form->getData();

            $movie = new Movie();
            $movie->setActor($actor);
            // $movie->setTitle($newMovie->getImg());

            $movie->setTitle($newMovie->getTitle());

            $this->movieRepository->save($movie, true);

            return $this->redirectToRoute('app_actor');
        }

        return $this->render('admin/actor/addmovie.html.twig', [
            'form' => $form->createView(),
            'actor' => $actor,
        ]);
    }
}
