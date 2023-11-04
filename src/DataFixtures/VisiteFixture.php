<?php
namespace App\DataFixtures;

use App\Entity\Visite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class VisiteFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //creation du faker pour la generation des valeurs aleatoires
        $faker = factory::create('fr_FR');
        //generation des enregitrements 
        for ($k=0 ; $k<100 ; $k++){
            $visite = new Visite();
            $visite->setVille($faker->city)
                    ->setPays($faker->country)
                    ->setDatecreation($faker->dateTimeBetween('-10 years', 'now'))
                    ->setTempmin($faker->numberBetween(-20, 10))
                    ->setTempmax($faker->numberBetween(10, 40))
                    ->setNote($faker->numberBetween(0, 20))
                    ->setAvis($faker->sentences(4, true));
            //enregistrement de l'objet
            $manager->persist($visite);
        }

        $manager->flush();
    }
}
