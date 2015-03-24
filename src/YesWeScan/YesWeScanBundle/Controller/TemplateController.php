<?php

namespace YesWeScan\YesWeScanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use YesWeScan\YesWeScanBundle\Form\TemplateType;
use YesWeScan\YesWeScanBundle\Entity\Template;

class TemplateController extends Controller
{


    public function creationAction(Request $request, $idUser)
    {

        $sondage = new Template();
        
        $form = $this->createForm(new TemplateType(), $sondage, array('action' => $idUser));
        
        if($request->isMethod('POST'))
        {
            
            $form->handleRequest($request);
            
            if($form->isValid())
            {
                
                $em = $this->getDoctrine()->getManager();
                
                $encoderFactory = $this->get('security.encoder_factory');
                $encoder = $encoderFactory->getEncoder($sondage);

                $sondage->setIduser($idUser);
                
                $em->persist($sondage);
                
                $em->flush();

                return $this->redirect($this->generateUrl('yes_we_scan_sondage_creation_etape_3', array ('idUser'=>$idUser) ));
            }
        }
        return $this->render('YesWeScanBundle:Sondage:creation.html.twig', 
                array('form' => $form->createView(), 'sondage' => $sondage));
        
    }

    



}
