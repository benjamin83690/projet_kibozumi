<?php

namespace App\Form;

use App\Entity\Credit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CreditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mensualites', TextType::class)
            ->add('nombresMensualites')
            ->add('montantEmprunte')
            ->add('tauxFixe')
            ->add('montantTotal')
            // ->add('updatedAt')
            // ->add('users')
            ->add('creditCategory', EntityType::class, [
                'class' => Category::class,
                'choice_label' => function ($category) {
                    return $category->getTitre();
                }
            ])
            // ->add('category', EntityType::class, [
            //     'class' => Category::class,
            //     'choice_label' => 'title',
            //     // 'expanded' => true,
            //     'placeholder' => '-- Choisir --',
            //     'query_builder' => function (EntityRepository $er) {
            //         return $er->createQueryBuilder('c')
            //                 ->orderBy('c.title', 'ASC');
            //     },
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Credit::class,
        ]);
    }
}
