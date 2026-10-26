<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class JeuController extends AbstractController
{
    private const JEUX = [
        ['id'=>1,'titre'=>'Minecraft','genre'=>'Sandbox','prix'=>29.99,'image'=>'minecraft.svg','disponible'=>true],
        ['id'=>2,'titre'=>'Stardew Valley','genre'=>'Simulation','prix'=>13.99,'image'=>'stardew.svg','disponible'=>true],
        ['id'=>3,'titre'=>'Celeste','genre'=>'Plateforme','prix'=>19.99,'image'=>'celeste.svg','disponible'=>false],
        ['id'=>4,'titre'=>'Hollow Knight','genre'=>'Metroidvania','prix'=>14.99,'image'=>'hollow.svg','disponible'=>true],
        ['id'=>5,'titre'=>'Hades','genre'=>'Roguelike','prix'=>24.99,'image'=>'hades.svg','disponible'=>true],
        ['id'=>6,'titre'=>'Portal 2','genre'=>'Réflexion','prix'=>9.75,'image'=>'portal.svg','disponible'=>false],
    ];

    #[Route('/jeux', name: 'app_jeux')]
    public function index(): Response
    {
        // TODO ETUDIANT : transmettre JEUX à Twig et afficher le catalogue.
        return new Response('Catalogue à construire');
    }
    // TODO ETUDIANT : route /jeu/{id}, recherche dans JEUX, erreur 404.
    // TODO ETUDIANT : filtrage /jeux/genre/{genre} ; penser à l'ordre des routes.
}
