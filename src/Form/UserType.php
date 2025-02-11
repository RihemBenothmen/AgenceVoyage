<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',null, [
                'attr' => ['class' => 'form-control bg-transparent'],
            ])
            ->add('nom',null, [
                'attr' => ['class' => 'form-control bg-transparent'],
            ])
            ->add('prenom',null, [
                'attr' => ['class' => 'form-control bg-transparent'],
            ])
            ->add('telephone',null, [
                'attr' => ['class' => 'form-control bg-transparent'],
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
