<?php

namespace App\Form;

use App\Entity\Metier;
use App\Entity\Domaine;
use App\Entity\Offreresearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ResearchOffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('intitule', TextType::class , [
            'label'=>'Offre',
            'required'=>false,
            'attr'=>[
                'placeholder' => 'Nom de l\'offre'
            ]
        ])
        ->add('datedebut', DateType::class, [
            'label'=>'date de debut',
            'required'=>false,
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'empty_data' => 'Default value',
        ])
        ->add('datefin', DateType::class, [
            'label'=>'Date de fin',
            'required'=>false,
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
        ])
        ->add('datefin', DateType::class, [
            'label'=>'Date de fin',
            'required'=>false,
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
        ])
        ->add('identifiantmetier', EntityType::class, [
            'label'=>'Métier',
            'class' => Metier::class,
            'choice_label' => 'libelle',
        ])
        ->add('identifiantdomaine', EntityType::class, [
            'mapped'=>false,
            'label'=>'Domaine',
            'class' => Domaine::class,
            'choice_label' => 'libelle',
        ])
        ->add('Ordre', ChoiceType::class, [
            'label'=>'Ordre',
            'choices'=>[
                'Ordre aphabétique (A->Z)' => 'ASC',
                'Ordre aphabétique (Z->A)' => 'DESC'],
                'attr' => ['class' => 'mb-4'],
                ])
            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class'=>Offreresearch::class,
            'method'=>'get',
            'csrf_protection'=>false,
            'validation_groups' => false,
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
