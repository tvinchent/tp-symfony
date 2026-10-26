<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SalonController extends AbstractController
{
    #[Route('/salons', name: 'app_salons')]
    public function index(): Response { return new Response('TODO : afficher les salons'); }
    #[Route('/salon/{id}', name: 'app_salon_show', requirements:['id'=>'\d+'])]
    public function show(int $id): Response { return new Response('TODO : afficher les messages du salon '.$id); }
}
