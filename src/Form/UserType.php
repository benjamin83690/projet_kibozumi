<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',null,['label'=>'Votre nom:'])
            ->add('prenom',null,['label'=>'Votre prénom:'])
            ->add('email',null,['label'=>'Votre email:'])
            // ->add('roles')
            ->add('password', PasswordType::class,['label'=>'Votre mot de passe:'])
            ->add('telephone',null,['label'=>'Votre téléphone:'])
            // ->add('userCredit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
