<?php

namespace YesWeScan\YesWeScanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use YesWeScan\YesWeScanBundle\Form\HotspotType;
use YesWeScan\YesWeScanBundle\Entity\Hotspot;


class HotspotController extends Controller
{


    public function creationAction(Request $request, $idUser, $etape, $idSondage)
    {
        $data = "http://ww.google.com/fr";

        $sondage = new Hotspot();

        
        $form = $this->createForm(new HotspotType(), $sondage, array('attr' => array('idUser' => $idUser, 'idSondage' => $idSondage ) ));
        
        if($request->isMethod('POST'))
        {
            
            $form->handleRequest($request);
            
            if($form->isValid())
            {
                
                $em = $this->getDoctrine()->getManager();
                
                $encoderFactory = $this->get('security.encoder_factory');
                $encoder = $encoderFactory->getEncoder($sondage);
        
                $em->persist($sondage);
                
                $em->flush();

                $idSondage = $sondage->getIdsondage();

                $params = array(
                    'idSondage'  => $idSondage
                );

                return $this->redirect($this->generateUrl('yes_we_scan_sondage_print', $params ));
            }
        }
        // return $this->render('YesWeScanBundle:Sondage:creation_3.html.twig', 
        //         array('form' => $form->createView(), 'sondage' => $sondage));

          return $this->render('YesWeScanBundle:Sondage:creation_3.html.twig', 
                array('form' => $form->createView(), 'sondage' => $sondage , 'etape' => $etape , 'idUser' => $idUser, 'qrcode' => $data, 'idSondage' => null));
        
    }



}
