<?php

namespace App\Form;

use App\Entity\Artist;
use App\Entity\Label;
use App\Entity\Tape;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class TapeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $builder->getData();


        $tape = $options['tape'];
        $tagNames = [];
        foreach ($tape->getTag() as $tag) {
            $tagNames[$tag->getId()] = $tag->getName();
        }

        $genreNames = [];
        foreach ($tape->getGenre() as $genre) {
            $genreNames[$genre->getId()] = $genre->getName();
        }

        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('description', TextareaType::class, [
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
            ->add('audioFile', FileType::class, [
                'label' => 'Audio File',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
//                'constraints' => [
//                    new File([
//                        'mimeTypes' => [
//                            'audio/mpeg',
//                            'audio/mp4',
//                            'audio/mp3',
//                            'audio/mpeg',
//                            'audio/ogg',
//                            'audio/wav',
//                            'audio/x-wav',
//                        ],
//                        'mimeTypesMessage' => 'Please upload a valid Audio file',
//                    ])
//                ],
            ])
            ->add('associate', EntityType::class, [
                'class' => Tape::class,
                'choice_label' => 'name',
                'multiple' => true,
                'required' => false,
            ])
            ->add('label', EntityType::class, [
                'class' => Label::class,
                'choice_label' => 'name',
                'multiple' => false,
            ])
            ->add('format', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('cover', FileType::class, [
                'label' => 'Cover',
                'required' => false,
                'mapped' => false,
            ])

            ->add('coverUrl', TextType::class, [
                'label' => 'Cover Url',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'https://',
                ]
            ])

            ->add('tags', CollectionType::class, [
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'label' => false,
                'required' => false,
                'prototype' => true,
                'prototype_options'  => [
                    'attr' => [
                        'class' => 'form-control form-control-sm mb-2',
                    ],
                    'label' => false,
                ],
                'entry_options' => [
                    'attr' => [
                        'class' => 'form-control form-control-sm mb-2',
                        'disabled' => true,
                    ],
                    'label' => false,
                ],
                'data' => $tagNames,
                'mapped' => false,
            ])

            ->add('genres', CollectionType::class, [
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'label' => false,
                'required' => false,
                'prototype' => true,
                'prototype_options'  => [
                    'attr' => [
                        'class' => 'form-control form-control-sm mb-2',
                    ],
                    'label' => false,
                ],
                'entry_options' => [
                    'attr' => [
                        'class' => 'form-control form-control-sm mb-2',
                        'disabled' => true,
                    ],
                    'label' => false,
                ],
                'data' => $genreNames,
                'mapped' => false,
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
        $resolver
        ->setDefaults([
            'data_class' => Tape::class,
        ])
        ->setRequired(['tape']);
    }
}
