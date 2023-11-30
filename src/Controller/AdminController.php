<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Repository\VoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin', methods: ['GET'])]
    public function adminUser(UserRepository $userRepository,VoyageRepository $voyageRepository): Response
    {
        $nbvoyage = $voyageRepository->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->getQuery()
            ->getSingleScalarResult();

        return $this->render('admin/index.html.twig', [
            'users' => $userRepository->findAll(),
            'voyages' => $voyageRepository->findAll(),
            'nbvoyage' => $nbvoyage,
        ]);
    }

}