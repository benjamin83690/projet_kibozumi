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
<<<<<<< HEAD
                ->setTitre('Prêt personnel')
=======
                ->setTitre('pret perso')
>>>>>>> dev
                ->setMensualites(857.92)
                ->setNombresMensualites(12)
                ->setTauxFixe(0.0295)
                ->setMontantEmprunte(10000)
                ->setMontantTotal(10295)
        ;
        $manager->persist($credit1);


        $credit2 = new Credit();
        $credit2->addUser($this->getReference(UserFixtures::USER))
<<<<<<< HEAD
                ->setTitre('Prêt personnel')
                ->setMensualites(439.83)
                ->setNombresMensualites(24)
                ->setTauxFixe(0.056)
=======
                ->setTitre('pret immo')
                ->setMensualites(439.83)
                ->setNombresMensualites(24)
                ->setTauxFixe(0.0556)
>>>>>>> dev
                ->setMontantEmprunte(10000)
                ->setMontantTotal(10560)
        ;
        $manager->persist($credit2);

        $credit3 = new Credit();
        $credit3->addUser($this->getReference(UserFixtures::USER))
<<<<<<< HEAD
                ->setTitre('Prêt personnel')
                ->setMensualites(294.44)
                ->setNombresMensualites(36)
                ->setTauxFixe(0.060)
                ->setMontantEmprunte(10000)
                ->setMontantTotal(10600)
        ;

=======
                ->setTitre('pret auto')
                ->setMensualites(294.44)
                ->setNombresMensualites(36)
                ->setTauxFixe(0.06)
                ->setMontantEmprunte(10000)
                ->setMontantTotal(10600)
        ;
>>>>>>> dev
        $manager->persist($credit3);
        $manager->flush();
    }

    public function getDependencies() {
        return array(
            UserFixtures::class,
        );
    }
}
