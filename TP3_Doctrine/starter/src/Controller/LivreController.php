<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LivreController extends AbstractController
{
    #[Route('/livres', name:'app_livres')]
    public function index(): Response
    {
        // TODO ETUDIANT : injecter LivreRepository, appeler findAll(), rendre Twig.
        return new Response('Bibliothèque à construire');
    }
    // TODO ETUDIANT : /livre/{id} et /livres/disponibles
}
