<?php

namespace YesWeScan\YesWeScanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;
use Symfony\Component\Validator\Constraints\Length;

class UserLogType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('pseudo', 'text', array('required' => true))
                
                         
            ->add('password', 'password', array('required' => true));
        
        
        $builder->add('Connexion', 'submit');
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
        return 'yeswescan_homepage_user_log_form';
    }
    

}