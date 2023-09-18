<?php

namespace App\Form;

use App\Entity\Menu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('formule', TypeTextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => "Nom de la formule"]
            ])
            ->add('plat', TypeTextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => "Nom du type de plat"]
            ])
            ->add('title', TypeTextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => "Nom du plat"]
            ])
            ->add('description', TextareaType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => "Description du plat"]
            ])
            ->add('price', NumberType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => "Prix du plat"]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Menu::class,
        ]);
    }
}
