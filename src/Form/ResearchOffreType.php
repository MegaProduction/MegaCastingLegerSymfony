<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\Offreresearch;

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
