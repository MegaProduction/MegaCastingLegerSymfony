<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Length;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class, [
                'label'=>'Prénom',
                'attr' => ['class' => 'mb-4'],
            ])
            ->add('nom', TextType::class, [
                'label'=>'Nom',
                'attr' => ['class' => 'mb-4'],
                ])
            ->add('mail', EmailType::class, [
                'label'=>'Adresse mail',
                'attr' => ['class' => 'mb-4'],
                ])
            ->add('adresse', TextType::class, [
                'label'=>'Adresse',
                'attr' => ['class' => 'mb-4'],
                ])
            ->add('objet', ChoiceType::class, [
                    'label'=>'Objet',
                    'choices'=>['Casting Art' => true,
                        'Casting Production' => true,
                        'Casting Spectacle' => true,
                        'Casting Théâtre' => true,
                        'Casting Cinéma' => true,
                        'Autres' => true],
                'attr' => ['class' => 'mb-4'],
                ])
            ->add('message', TextareaType::class, [
                'label'=>'Message',
                'constraints'=>[
                    new Length([
                                     // max length allowed by Symfony for security reasons
                                     'max' => 3999,
                                ]),
                ],
                'attr' => ['class' => 'mb-4'],
                ])
            ->add('save', SubmitType::class, [
                'label'=>'Envoyer',
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
