<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    const USER = 'user-1';
    const USER_2 = 'user-2';

    public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            '123'
        ))
        ->setEmail('ben@gmail.com')
        ->setNom('Fct')
        ->setPrenom('Ben')
        ->setTelephone('0664192331')
        ->setRoles(['ROLE_ADMIN'])
        ;
        $manager->persist($user);

        $user2 = new User();

        $user2->setPassword($this->passwordEncoder->encodePassword(
            $user2,
            '321'
        ))
        ->setEmail('kibozumi@gmail.com')
        ->setNom('kibo')
        ->setPrenom('zumi')
        ->setTelephone('06545454212')
        ->setRoles(['ROLE_USER'])
        ;
        $manager->persist($user2);

        $manager->flush();

        $this->addReference(self::USER, $user);
        $this->addReference(self::USER_2, $user2);
    }
}
