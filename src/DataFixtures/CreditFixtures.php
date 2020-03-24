<?php

namespace App\DataFixtures;

use App\Entity\Credit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CreditFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $credit1 = new Credit();
        $credit1->addUser($this->getReference(UserFixtures::USER))
                ->setTitre('Prêt personnel')
                ->setMensualites(346.19)
                ->setNombresMensualites(30)
                ->setTauxFixe(0.0295)
                ->setMontantEmprunte(10000)
                ->setMontantTotal(10385.70)
        ;

        $manager->persist($credit1);


        $credit2 = new Credit();
        $credit2->addUser($this->getReference(UserFixtures::USER))
                ->setTitre('Prêt maison')
                ->setMensualites(153.09)
                ->setNombresMensualites(78)
                ->setTauxFixe(0.0556)
                ->setMontantEmprunte(10000)
                ->setMontantTotal(11941.02)
        ;

        $manager->persist($credit2);
        $manager->flush();
    }

    public function getDependencies() {
        return array(
            UserFixtures::class,
        );
    }
}
