<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, ['label'=>'Prénom'])
            ->add('name', TextType::class, ['label'=>'Nom'])
            ->add('mail', EmailType::class, ['label'=>'Adresse mail'])
            ->add('address', TextType::class, ['label'=>'Adresse'])
            ->add('object', ChoiceType::class, [
                    'label'=>'Objet',
                    'choices'=>['Casting "Art"' => true,
                        'Casting "Production"' => true,
                        'Casting "Spectacle"' => true,
                        'Casting "Théâtre"' => true,
                        'Casting "Cinéma"' => true,
                        'Autres' => true]
                ])
            ->add('message', TextType::class, ['label'=>'Message'])
            ->add('save', SubmitType::class, ['label'=>'Envoyer'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
