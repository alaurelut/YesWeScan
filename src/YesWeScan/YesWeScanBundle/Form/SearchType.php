<?php

namespace YesWeScan\YesWeScanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;
use Symfony\Component\Validator\Constraints\Length;

class SearchType extends AbstractType
{


        public function buildForm(FormBuilderInterface $builder, array $options)
    {


            $builder ->add('question', 'text', array('required' => true));
            

            $builder->add('Rechercher', 'submit', array('label' => 'Rechercher'));
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
        return 'yeswescan_homepage_sondage_search_form';
    }
    

}