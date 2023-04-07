<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Form\MovieFormType;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{

    private $em;
    private $movieRepository;
    public function __construct(EntityManagerInterface $em, MovieRepository $movieRepository)
    {
        $this->movieRepository = $movieRepository;
        $this->em = $em;
    }

    //List of Movie
    #[Route('/admin/movie', name: 'app_movie')]
    public function index(): Response
    {
        $movie = $this->movieRepository->findAll();
        return $this->render('admin/movie/list.html.twig', [
            'title' => 'List of Movie',
            'movie' => $movie
        ]);
    }

    //Create Movie
    #[Route('/admin/movie/create', name: 'create_movie')]
    public function create(Request $request,): Response
    {
        $movie = new Movie;
        $form = $this->createForm(MovieFormType::class, $movie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newMovie = $form->getData();

            //upload image
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
                $newMovie->setImage('/uploads/' . $newFileName);
            }

            //Upload Video
            $videoPath = $form->get('video')->getData();
            if ($videoPath) {
                $newFileName2 = uniqid() . '.' . $videoPath->guessExtension();

                try {
                    //code...
                    $videoPath->move(
                        $this->getParameter('kernel.project_dir') . '/public/videos',
                        $newFileName2
                    );
                } catch (FileException $e) {
                    //throw $th;
                    return new Response($e->getMessage());
                }
                $newMovie->setVideo('/videos/' . $newFileName2);
            }

            $this->em->persist($newMovie);
            $this->em->flush();

            return $this->redirectToRoute('app_movie');
        }

        return $this->render('admin/movie/create.html.twig', [
            'title' => 'ADD NEW MOVIE',
            'form' => $form->createView()
        ]);
    }

    // Delete Movie
    #[Route('/admin/movie/delete/{id}', methods: ['GET'], name: 'delete_movie')]
    public function destroy($id): Response
    {
        $movie = $this->movieRepository->find($id);
        $this->em->remove($movie);
        $this->em->flush();

        return $this->redirectToRoute('app_movie');

        return $this->render('admin/movie/list.html.twig', []);
    }
}