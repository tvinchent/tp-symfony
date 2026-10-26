<?php
namespace App\Controller;
use App\Repository\SalonRepository;
use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SalonController extends AbstractController
{
    #[Route('/salons', name: 'app_salons')]
    public function index(SalonRepository $salons): Response
    {
        return $this->render('salon/index.html.twig', ['salons'=>$salons->findAll()]);
    }
    #[Route('/salon/{id}', name: 'app_salon_show', requirements: ['id'=>'\d+'])]
    public function show(int $id, SalonRepository $salons, MessageRepository $messages): Response
    {
        $salon=$salons->find($id);
        if (!$salon) {throw $this->createNotFoundException('Salon introuvable');}
        $liste=$messages->findBy(['salon'=>$salon], ['dateCreation'=>'ASC','id'=>'ASC']);
        // TODO ETUDIANT : créer Message, MessageType, Request, handleRequest,
        // isSubmitted()/isValid(), setSalon(), persist/flush et redirectToRoute().
        return $this->render('salon/show.html.twig', ['salon'=>$salon,'messages'=>$liste]);
    }
}
