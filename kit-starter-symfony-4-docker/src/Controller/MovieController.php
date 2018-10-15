<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Movie;
use App\Form\SaleType;
use App\Entity\Sale;
use App\Entity\Enquiry;
use App\Form\EnquiryType;
use App\Event\SaleEvent;
use App\Logger\SaleLogger;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends Controller
{

    /**
     * @Route("/enquiry", name="enquiry")
     */
    public function newEnquiry(Request $request)
    {
        $enquiry = new Enquiry();

        $form = $this->createForm(EnquiryType::class, $enquiry);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enquiry);
            $em->flush();

            $this->addFlash(
                'notice',
                'Your enquiry has been sent. We will get back to you soon.'
            );

            return $this->redirectToRoute('index');
        }

        return $this->render('newEnquiry.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/movie/{movieId}/book", name="book")
     */
    public function newSale(SaleLogger $saleLogger, Request $request, $movieId)
    {
        $sale = new Sale();

        /** @var  $movie Movie */
        $movie = $this->getDoctrine()
            ->getRepository(Movie::class)
            ->find($movieId);

        $form = $this->createForm(SaleType::class, $sale, ['movie' => $movie]);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sale);

            $numTickets = $form['numTickets']->getData();

            $this->get('event_dispatcher')
                ->dispatch(
                    SaleEvent::NAME,
                    new SaleEvent($sale, $movie, $numTickets)
                );


            $em->flush();

            $saleLogger->log($sale);

            $this->addFlash(
                'notice',
                'Thank you for your sale!'
            );

            return $this->redirectToRoute('index');
        }

        return $this->render('movies/newSale.html.twig', [
            'form' => $form->createView(),
            'movie' => $movie,
        ]);
    }

    /**
     * @Route("/movies", name="index")
     */
    public function index()
    {
        $movies = $this->getDoctrine()
            ->getRepository(Movie::class)
            ->findAll();

        return $this->render('movies/index.html.twig', [
            'movies' => $movies,
        ]);
    }

    /**
     * @Route("/movie/{movieId}", name="movie")
     */
    public function movie(int $movieId)
    {
        $em = $this->getDoctrine()->getManager();

        return $this->render('movies/movie.html.twig', [
            'movie' => $em->getRepository(Movie::class)->findOneWithActors($movieId),
        ]);
    }

    /**
     * @Route("/movie/{movieId}" , name="movie")

    public function movie(int $movieId)
    {
        $movie = $this->getDoctrine()
            ->getRepository(Movie::class)
            ->find($movieId);

        return $this->render('movies/movie.html.twig', [
            'movie' => $movie,
        ]);
    }
     */
}

