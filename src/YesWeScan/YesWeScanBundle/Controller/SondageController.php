<?php

namespace YesWeScan\YesWeScanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use YesWeScan\YesWeScanBundle\Form\SondageType;
use YesWeScan\YesWeScanBundle\Entity\Sondage;
use Ob\HighchartsBundle\Highcharts\Highchart;

class SondageController extends Controller
{
    public function creationAction(Request $request, $idUser, $etape)
    {
        

        $sondage = new Sondage();
        
        $form = $this->createForm(new SondageType(), $sondage, array('action' => $etape, 'max_length' => $idUser ));

        if($request->isMethod('POST'))
        {
            
            $form->handleRequest($request);
            
            if($form->isValid())
            {
                
                $em = $this->getDoctrine()->getManager();
                
                $encoderFactory = $this->get('security.encoder_factory');
                $encoder = $encoderFactory->getEncoder($sondage);

                $session = $request->getSession();
                $session->start();
                if ( $session->get('id') ) {
                    $session_id = $session->get('id');
                }
                else
                {
                    $session_id = 0;
                }
                       

                $sondage->setIduser($session_id);
                
                $em->persist($sondage);
                
                $em->flush();

                $idSondage = $sondage->getId();


                $idUser = $sondage->getIduser();

                $params = array(
                    'idUser'  => $idUser,
                    'idSondage'  => $idSondage
                );

                return $this->redirect($this->generateUrl('yes_we_scan_sondage_creation_etape_2', $params));
            }
        }
        return $this->render('YesWeScanBundle:Sondage:creation.html.twig', 
                array('form' => $form->createView(), 'sondage' => $sondage , 'etape' => $etape , 'idUser' => $idUser, 'idSondage' => null));
        
    }

    public function printAction(Request $request, $idUser, $idSondage)
    {

        $em = $this->getDoctrine()->getManager();

        $sondage = $em->getRepository('YesWeScanBundle:Sondage')->find($idSondage);

        $em->persist($sondage);
        $em->flush();


        $currentRoute = $request->attributes->get('_route');
        $currentUrl = $this->get('router')
                     ->generate($currentRoute, array('idSondage' => $idSondage,'idUser' => $idUser), true);

        $goodUrl = explode("/YesWeScan/", $currentUrl);
        // var_dump($sondage);
        $url1 = substr( $this->generateUrl('yes_we_scan_sondage_vote', array('idSondage' => $idSondage, 'numReponse' => 1)) , 1 );

        $url2 = substr( $this->generateUrl('yes_we_scan_sondage_vote', array('idSondage' => $idSondage, 'numReponse' => 2)) , 1 );

        $url3 = substr( $this->generateUrl('yes_we_scan_sondage_vote', array('idSondage' => $idSondage, 'numReponse' => 3)) , 1 );

        $url4 = substr( $this->generateUrl('yes_we_scan_sondage_vote', array('idSondage' => $idSondage, 'numReponse' => 4)) , 1 );

        $url5 = substr( $this->generateUrl('yes_we_scan_sondage_vote', array('idSondage' => $idSondage, 'numReponse' => 5)) , 1 );




        $vote3 = 0;
        $vote4 = 0;
        $vote5 = 0;
        if ($sondage->getReponse3() != NULL) {
            $vote3 = 1;

        } 
        if ($sondage->getReponse4() != NULL) {
            $vote4 = 1;

        } 
        if ($sondage->getReponse5() != NULL) {
            $vote5 = 1;

        } 

        $nbReponse = ( 2 + $vote3 + $vote4 + $vote5 );



                
       return $this->render('YesWeScanBundle:Sondage:print.html.twig',  array('sondage' => $sondage, 'url1' => $url1, 'url2' => $url2, 'url3' => $url3, 'url4' => $url4, 'url5' => $url5, 'nbReponse' => $nbReponse , 'currentUrl' => $currentUrl ));
        
    }



    public function voteAction(Request $request, $idSondage, $numReponse)
    {

        $em = $this->getDoctrine()->getManager();

        $sondage = $em->getRepository('YesWeScanBundle:Sondage')->find($idSondage);

        switch ($numReponse) {
            case 1:
                $nbVote = $sondage->getVote1();
                $sondage->setVote1($nbVote+1);
                break;
            case 2:
                $nbVote = $sondage->getVote2();
                $sondage->setVote2($nbVote+1);
                break;
            case 3:
                $nbVote = $sondage->getVote3();
                $sondage->setVote3($nbVote+1);
                break;
            case 4:
                $nbVote = $sondage->getVote4();
                $sondage->setVote4($nbVote+1);
                break;
            case 5:
                $nbVote = $sondage->getVote5();
                $sondage->setVote5($nbVote+1);
                break;
            default:
                
                break;
        }

        $em->persist($sondage);

        $em->flush();


    $ob = new Highchart();
    $ob->chart->renderTo('linechart');
    $ob->title->text($sondage->getQuestion());
    $ob->plotOptions->pie(array(
        'allowPointSelect'  => true,
        'cursor'    => 'pointer',
        'dataLabels'    => array('enabled' => false),
        'showInLegend'  => true
    ));

    $data = array(
        array($sondage->getReponse1(), $sondage->getVote1() ),
        array($sondage->getReponse2(), $sondage->getVote2() )
    );

    

        $vote3 = 0;
        $vote4 = 0;
        $vote5 = 0;
        if ($sondage->getReponse3() != NULL) {
            $vote3 = 1;
            array_push($data, array( $sondage->getReponse3(), $sondage->getVote3() ) );
        } 
        if ($sondage->getReponse4() != NULL) {
            $vote4 = 1;
            array_push($data, array( $sondage->getReponse4(), $sondage->getVote4() ) );
        } 
        if ($sondage->getReponse5() != NULL) {
            $vote5 = 1;
            array_push($data, array( $sondage->getReponse5(), $sondage->getVote5() ) );
        } 

        $nbReponse = ( 2 + $vote3 + $vote4 + $vote5 );


    $ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));
                
       return $this->render('YesWeScanBundle:Sondage:vote.html.twig',  array('idSondage' => $idSondage , 'numReponse' => $numReponse,'chart' => $ob));
        
    }


}
