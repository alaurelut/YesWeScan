<?php

namespace YesWeScan\YesWeScanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;
use Symfony\Component\Validator\Constraints\Length;

class TemplateType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        

           $builder 
           ->add('nom', 'text', array('required' => false))
            ->add('id', 'choice', array(
                'choices' => array('1' => 'Template 1', '2' => 'Template 2', '3' => 'Template 3'),
                 'expanded' => true,
                 'multiple' => false
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
        return 'yeswescan_homepage_template_register_form';
    }
    

}