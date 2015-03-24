<?php

namespace YesWeScan\YesWeScanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;
use Symfony\Component\Validator\Constraints\Length;

class MergedFormType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('sondage', new SondageType());
        $builder->add('hotspot',  new HotspotType());
        
    }

        public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(

            
            'submitLabel' => 'Enregistrer',

            "data_class" => "YesWeScan\YesWeScanBundle\Form\SondageType"
        ));
    }

    public function getName()
    {
        return 'yeswescan_homepage_sondage_register_merged_form';
    }
    

}