<?php

namespace App\Form;

use App\Entity\Artist;
use App\Entity\Tape;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TapeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $builder->getData();

        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('releaseYear', NumberType::class, [
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('artist', EntityType::class, [
                'class' => Artist::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])

            ->add('save', SubmitType::class, [
                "label" => $user ? "Update" : "Create",
                "attr" => [
                    "class" => "btn btn-primary"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tape::class,
        ]);
    }
}
