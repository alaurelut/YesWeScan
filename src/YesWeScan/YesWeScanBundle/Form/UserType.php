<?php

namespace YesWeScan\YesWeScanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;
use Symfony\Component\Validator\Constraints\Length;

class UserType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('pseudo', 'text', array('required' => true))
                
            ->add('email', 'email', array('required' => true))

                         
            ->add('password', 'repeated', array(
                'type' => 'password', 
                'mapped' => false, 
                'required' => $options['passwordRequired'],
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'options' => array('required' => $options['passwordRequired']),
                'first_options'  => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Confirmer Mot de passe'),
                
                'constraints' => array(
                    
                    new Length(array('min' => 6))
                )
            ));
        
        
        $builder->add('inscription', 'submit');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            
            'cgu' => false,
            
            'passwordRequired' => true,
            
            'submitLabel' => 'Enregistrer'
        ));
    }

    public function getName()
    {
        return 'yeswescan_homepage_user_register_form';
    }
    

}