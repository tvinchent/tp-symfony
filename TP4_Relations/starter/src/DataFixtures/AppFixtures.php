<?php
namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $salons = require dirname(__DIR__, 2).'/data/salons.php';
        foreach ($salons as $donneeSalon) {
            // TODO ETUDIANT : instancier Salon ; setNom / setDescription.
            foreach ($donneeSalon['messages'] as $contenu) {
                // TODO ETUDIANT : instancier Message, date, association au Salon.
            }
        }
        // TODO ETUDIANT : appeler flush() après persist() des objets.
    }
}
