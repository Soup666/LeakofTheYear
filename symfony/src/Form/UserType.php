<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $builder->getData();

        $selectedRoles = $user ? $user->getRoleOptions() : ["ROLE_USER"];

        $builder
            ->add('username')
            ->add('firstName', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('lastName', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('roleOptions', ChoiceType::class,[
                'choices' => array_flip(User::getRolesAvailable()),
                'attr' => [
                    'class' => 'form-control',
                    'data-choices' => '{"removeItemButton": true}'
                ],
                'multiple' => true,
                "data" => $selectedRoles,
            ])
            ->add('password', PasswordType::class, [
                "required" => is_null($user),
                "attr" => [
                    'placeholder' => is_null($user) ? "" : "Leave blank to leave password unchanged."
                ]
            ])
            ->add('email', EmailType::class)
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
            'data_class' => User::class,
        ]);
    }
}
