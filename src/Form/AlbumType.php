<?php

namespace App\Form;

use App\Entity\Album;
use App\Entity\Singer;
use App\Entity\Groupe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AlbumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('description', TextareaType::class, [
              'required' => false,
            ])
            ->add('collection', TextType::class, [
              'required' => false,
            ])
            ->add('notes', TextareaType::class, [
              'required' => false,
            ])
            ->add('artist', EntityType::class, [
              'class' => Singer::class,
              'choice_label' => 'lastname',
                'placeholder' => 'Choisir l\'artiste',
              'required'=> false,
            ])
            ->add('groupe', EntityType::class, [
              'class' => Groupe::class,
              'choice_label' => 'name',
              'placeholder' => 'Choisir le groupe',
              'required'=> false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Album::class,
        ]);
    }
}
