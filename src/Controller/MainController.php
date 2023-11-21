<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    /**
     * @Route("/{any}", name="app_catch_all", requirements={"any"="^(?!index$|about$|service$|booking$|contact$|destination$|package$|team$|testimonial$).+"})
     */
    public function page404_route(): Response
    {
        return $this->render('main/404.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }


    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about_route(): Response
    {
        return $this->render('main/about.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }


    #[Route('/service', name: 'app_service')]
    public function service_route(): Response
    {
        return $this->render('main/service.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    #[Route('/booking', name: 'app_booking')]
    public function booking_route(): Response
    {
        return $this->render('main/booking.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }


    #[Route('/contact', name: 'app_contact')]
    public function contact_route(): Response
    {
        return $this->render('main/contact.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }


    #[Route('/destination', name: 'app_destination')]
    public function destination_route(): Response
    {
        return $this->render('main/destination.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }


    #[Route('/package', name: 'app_package')]
    public function package_route(): Response
    {
        return $this->render('main/package.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }



    #[Route('/team', name: 'app_team')]
    public function team_route(): Response
    {
        return $this->render('main/team.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }


    #[Route('/testimonial', name: 'app_testimonial')]
    public function testimonial_route(): Response
    {
        return $this->render('main/testimonial.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
