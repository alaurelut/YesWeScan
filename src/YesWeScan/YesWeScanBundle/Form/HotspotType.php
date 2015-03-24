<?php

namespace YesWeScan\YesWeScanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;
use Symfony\Component\Validator\Constraints\Length;

class HotspotType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
             
           $builder 

            ->add('nom', 'text', array('required' => true))

            ->add('position', 'hidden', array('required' => true))


            ->add('idSondage', 'hidden', array(
                     'label' => 'idSondage',
                     'data' => $options['attr']['idSondage']
                ))

            ->add('idUser', 'hidden', array(
                     'label' => 'idUser',
                     'data' => $options['attr']['idUser']
                ));

            $builder->add('enregistrer', 'submit', array('label' => 'Créer'));
        
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
        return 'yeswescan_homepage_Hotspot_register_form';
    }
    

}