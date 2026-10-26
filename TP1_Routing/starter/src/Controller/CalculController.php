<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CalculController extends AbstractController
{
    #[Route('/bonjour/{prenom}', name: 'app_bonjour', defaults: ['prenom' => 'visiteur'])]
    public function bonjour(string $prenom): Response
    {
        // TODO ETUDIANT : personnaliser la réponse.
        return new Response('Bonjour !');
    }

    // TODO ETUDIANT : ajouter /calcul/{operation}/{a}/{b}, des contraintes
    // sur les deux nombres, le choix de l'opération et les erreurs HTTP.
    // TODO ETUDIANT : ajouter une route d'accueil avec des liens générés
    // à partir du nom de route (generateUrl() ou path() via Twig).
}
