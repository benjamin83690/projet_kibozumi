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
<<<<<<< Updated upstream
                ->setMensualites(857.92)
                ->setNombresMensualites(12)
                ->setTauxFixe(2.95)
=======
                ->setTitre('Prêt personnel')
                ->setMensualites(857.92)
                ->setNombresMensualites(12)
                ->setTauxFixe(0.0295)
>>>>>>> Stashed changes
                ->setMontantEmprunte(10000)
                ->setMontantTotal(10295)
        ;
        $manager->persist($credit1);


        $credit2 = new Credit();
        $credit2->addUser($this->getReference(UserFixtures::USER))
<<<<<<< Updated upstream
                ->setMensualites(439.83)
                ->setNombresMensualites(24)
                ->setTauxFixe(4.50)
=======
                ->setTitre('Prêt maison')
                ->setMensualites(439.83)
                ->setNombresMensualites(24)
                ->setTauxFixe(0.0556)
>>>>>>> Stashed changes
                ->setMontantEmprunte(10000)
                ->setMontantTotal(10560)
        ;
        $manager->persist($credit2);

        $credit3 = new Credit();
        $credit3->addUser($this->getReference(UserFixtures::USER))
<<<<<<< Updated upstream
                ->setMensualites(294.44)
                ->setNombresMensualites(36)
                ->setTauxFixe(6)
                ->setMontantEmprunte(10000)
                ->setMontantTotal(10600)
        ;
=======
                ->setTitre('Prêt auto')
                ->setMensualites(294.44)
                ->setNombresMensualites(36)
                ->setTauxFixe(0.06)
                ->setMontantEmprunte(10000)
                ->setMontantTotal(10556)
        ;

>>>>>>> Stashed changes
        $manager->persist($credit3);
        $manager->flush();
    }

    public function getDependencies() {
        return array(
            UserFixtures::class,
        );
    }
}
