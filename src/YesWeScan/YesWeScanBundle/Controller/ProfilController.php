<?php

namespace YesWeScan\YesWeScanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use YesWeScan\YesWeScanBundle\Entity\User;

class ProfilController extends Controller
{
    public function indexAction(Request $request, $idUser)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('YesWeScanBundle:User')->find($idUser);

        $filters = array('iduser' => $idUser);

        $sondage = $em->getRepository('YesWeScanBundle:Sondage')->findBy($filters, array('date' => 'desc'));

        // var_dump($sondage);

        
        


        $em->persist($user);
        $em->flush();


       return $this->render('YesWeScanBundle:Profil:index.html.twig', array('user' => $user, 'sondages' => $sondage));
    }
    public function questionAction()
    {
        return $this->render('YesWeScanBundle:Profil:question.html.twig');
    }
    public function sondageAction()
    {
        //Connexion à la base de données
        $em = $this->getDoctrine()->getManager();

        //Récupération des sondages enregistres
        $sondage = $em->getRepository('YesWeScanBundle:Sondage')->findAll(1);

        return $this->render('YesWeScanBundle:Profil:sondage.html.twig', array('sondages' => $sondage));
    }
}
