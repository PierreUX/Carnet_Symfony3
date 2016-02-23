<?php

namespace AdresseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UtilisateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                                                'label' => 'Votre nom',
                                                'required' => true,
                                                'attr' => array(
                                                                'class' => 'form-control'
                                                                )
                                                ))
            ->add('prenom', TextType::class, array('label' => 'Votre prénom',
                                                    'required' => true,
                                                    'attr' => array(
                                                                    'class' => 'form-control'
                                                                    )
                                                   ))
            ->add('login', TextType::class, array(
                                                'label' => 'Votre login',
                                                'required' => true,
                                                'attr' => array(
                                                                'class' => 'form-control'
                                                                )
                                                ))
            ->add('password', PasswordType::class, array(
                                                'label' => 'Votre mot de passe',
                                                'required' => true,
                                                'attr' => array(
                                                                'class' => 'form-control'
                                                                )
                                                ))
            ->add('email', EmailType::class, array('label' => 'Votre email', 'required' => true,
                                                'attr' => array(
                                                                'class' => 'form-control'
                                                                )
                                                ))
            ->add('sauvegarder', SubmitType::class, array('attr' => array('class' => 'btn btn-success')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdresseBundle\Entity\Utilisateur'
        ));
    }
}
