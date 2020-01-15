<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\Skill;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Prénom']
            ])

            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Nom']
            ])

            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['placeholder' => 'john.doe@gmail.com']
            ]) //type = input de type email

            ->add('phone', TelType::class, [
                'label' => 'Téléphone',
                'attr' => ['placeholder' => '0233123456']
            ]) //type = input de type téléphone

            ->add('date', DateType::class, [
                'widget' => 'single_text' //pour afficher la date en une ligne, avec le calendar
            ])

            ->add('hour', TimeType::class, [
                'widget' => 'single_text' //pour afficher l'heure sur une ligne
            ])

            ->add('message', TextType::class, [
                'label' => 'Message',
                'attr' => ['placeholder' => 'Ecrivez votre message ici...']
            ])

            //->add('createdAt')
            ->add('skill', EntityType::class, [
                'class' => Skill::class,
                'label' => 'Spécialiste'
            ])
            //->add('doctor')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}
