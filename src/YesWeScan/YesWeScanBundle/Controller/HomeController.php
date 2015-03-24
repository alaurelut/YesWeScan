<?php

namespace YesWeScan\YesWeScanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use YesWeScan\YesWeScanBundle\Form\SearchType;
use YesWeScan\YesWeScanBundle\Form\UserType;
use YesWeScan\YesWeScanBundle\Form\UserLogType;
use YesWeScan\YesWeScanBundle\Entity\User;
use YesWeScan\YesWeScanBundle\Entity\Sondage;
use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends Controller
{

	public function indexAction(Request $request)
    {
        
        $user = new User();
        
        $form = $this->createForm(new UserType(), $user);

        $formLog = $this->createForm(new UserLogType(), $user);

        $search = new Sondage();
        
        $form_search = $this->createForm(new SearchType(), $search);
        
        
        if($request->isMethod('POST'))
        {
            
            
            $form->handleRequest($request);
            
            if($form->isValid())
            {
                    
                    $em = $this->getDoctrine()->getManager();
                
                    $encoderFactory = $this->get('security.encoder_factory');
                    $encoder = $encoderFactory->getEncoder($user);
                    
                    
                    $password = $form->get('password')->getData();

                    $date = new \DateTime();

                    $user->setPassword(md5($password));

                    $user->setDateinscription($date);
                    
                    $user->setDroit(true);
                    
                    $em->persist($user);
                    
                    $em->flush();
                    
                    $idUser = $user->getId();


                    return $this->redirect($this->generateUrl('yes_we_scan_profil', array ('idUser'=>$idUser) ));

            }

            $formLog->handleRequest($request);
            
            if($formLog->isValid())
            {
                    
                    $em = $this->getDoctrine()->getManager();

                    $encoderFactory = $this->get('security.encoder_factory');
                    $encoder = $encoderFactory->getEncoder($user);

                    $pseudo = $formLog->get('pseudo')->getData();
                    $password = $formLog->get('password')->getData();

                    $filters = array('pseudo' => $pseudo);
                    $em = $this->getDoctrine()->getManager();
        
                    $user_name = $em->getRepository('YesWeScanBundle:User')->findBy($filters);

                    



                    
                    if ( $user_name[0]->getPassword() == md5($password) ) {
                        $idUser = $user_name[0]->getId();

                        $session = $request->getSession();
                        $session->start();
                        $session->set('id', $idUser);
                       
                        return $this->redirect($this->generateUrl('yes_we_scan_profil', array ('idUser'=>$idUser) ));
                    }

                    else
                    {
                        echo 'mauvais mot de passe';
                    }

            }

            $form_search->handleRequest($request);
            
            if($form_search->isValid())
            {

                    $question = $search->getQuestion();

                    $filters = array('question' => $question );
                    
                    $em = $this->getDoctrine()->getManager();
            
                    $result = $em->getRepository("YesWeScanBundle:Sondage")->createQueryBuilder('o')
                   ->where('o.question LIKE :question')
                   ->setParameter('question','%'.$question.'%' )
                   ->getQuery()
                   ->getResult();
                    
                    return $this->render('YesWeScanBundle:Sondage:search.html.twig', array('result' => $result));
            }


        }

        $session = $request->getSession();
        $session->start();
        if ( $session->get('id') ) {
        $session_id = $session->get('id');

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('YesWeScanBundle:User')->find($session_id);

        $em->persist($user);
        $em->flush();
        }
        else
        {
            $session_id = null;
        }
                        
        return $this->render('YesWeScanBundle:Home:index.html.twig', 
                array('form' => $form->createView(),'formLog' => $formLog->createView(),'form_search' => $form_search->createView(), 'user' => $user , 'session_id' => $session_id ));
    }
}