<?php

namespace App\Form;

use App\Entity\Credit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
<<<<<<< Updated upstream
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
=======
>>>>>>> Stashed changes
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CreditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< Updated upstream
            ->add('montantEmprunte')
            ->add('mensualites', TextType::class)
=======
            ->add('titre')
            ->add('mensualites')
>>>>>>> Stashed changes
            ->add('nombresMensualites')
            ->add('tauxFixe')
            ->add('montantTotal')
<<<<<<< Updated upstream
            ->add('imageName')
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
=======
            // ->add('users')
>>>>>>> Stashed changes
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
