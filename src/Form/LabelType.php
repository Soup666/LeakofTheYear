<?php

namespace App\Form;

use App\Entity\Artist;
use App\Entity\Label;
use App\Entity\Tape;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LabelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $builder->getData();

        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter artist name...',
                ]
            ])

            // ->add('cover', FileType::class, [
            //     'label' => 'Cover',
            //     'required' => false,
            //     'mapped' => false,
            // ])

            // ->add('coverUrl', TextType::class, [
            //     'label' => 'Cover Url',
            //     'required' => false,
            //     'mapped' => false,
            //     'attr' => [
            //         'class' => 'form-control',
            //         'placeholder' => 'https://',
            //     ]
            // ])

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
            'data_class' => Label::class,
        ]);
    }
}
