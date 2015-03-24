<?php

namespace YesWeScan\YesWeScanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;
use Symfony\Component\Validator\Constraints\Length;

class SondageType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

            if ($options['action'] == 1) {
                $builder ->add('question', 'textarea', array('required' => true))
                
                ->add('context', 'textarea', array('required' => true))

                ->add('reponse1', 'textarea', array('required' => true))

                ->add('reponse2', 'textarea', array('required' => true))

                ->add('reponse3', 'textarea', array('required' => false))

                ->add('reponse4', 'textarea', array('required' => false))

                ->add('reponse5', 'textarea', array('required' => false))

                ->add('private', 'checkbox', array('required' => false))

                ->add('idUser', 'hidden', array('required' => false))

                ->add('idUser', 'hidden', array(
                     'label' => 'idUser',
                     'data' => $options['max_length']
                ))

               ->add('idTemplate', 'choice', array(
                   'choices' => array('1' => '', '2' => '', '3' => ''),
                    'expanded' => true,
                    'multiple' => false
               ));

            }


            $builder->add('enregistrer', 'submit', array('label' => 'Créer'));
    }

        public function buildForm_search(FormBuilderInterface $builder, array $options)
    {


                $builder ->add('question', 'textarea', array('required' => true));
            

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
        return 'yeswescan_homepage_sondage_register_form';
    }
    

}