<?php

namespace App\Form;

use App\Entity\Credit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CreditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('mensualites')
            ->add('nombresMensualites')
            ->add('montantEmprunte')
            ->add('tauxFixe')
            ->add('montantTotal')
            // ->add('users')
            ->add('imageFile', VichImageType::class, ['required'=> false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Credit::class,
        ]);
    }
}
