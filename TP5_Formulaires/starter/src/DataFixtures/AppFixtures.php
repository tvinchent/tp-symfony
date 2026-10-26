<?php
namespace App\DataFixtures;
use App\Entity\Salon;
use App\Entity\Message;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        foreach (require dirname(__DIR__, 2).'/data/salons.php' as $donnee) {
            $salon = (new Salon())->setNom($donnee['nom'])->setDescription($donnee['description']);
            $manager->persist($salon);
            foreach ($donnee['messages'] as $contenu) {
                $message=(new Message())->setContenu($contenu)->setSalon($salon);
                $manager->persist($message);
            }
        }
        $manager->flush();
    }
}
