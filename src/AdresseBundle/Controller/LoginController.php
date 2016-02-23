<?php

namespace AdresseBundle\Controller;

use AdresseBundle\Entity\Utilisateur;
use AdresseBundle\Entity\Carnet;
use AdresseBundle\Form\UtilisateurType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use DateTime;

class LoginController extends Controller
{

    public function ConnexionAction(Request $request)
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);
        $error = '';

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AdresseBundle:Utilisateur');
            $utilisateur = $form->getData();
            $result = $repository->findOneBy(array('login' => $utilisateur->getLogin(), 'password' => $utilisateur->getPassword()));
            
            if($result)
            {
                $utilisateur = $result;
                $session = $request->getSession();
                if(!$session->has('id'))
                    $session->set('id',$utilisateur->getId());
                
                return $this->redirectToRoute('adresse_homepage');
            }
            else
            {
                $error = 'Login ou mot de passe incorrect';
            }
        }

        return $this->render('AdresseBundle:Login:connexion.html.twig', array(
            'form' => $form->createView(),
            'error' => $error
        ));
    }

    public function inscriptionAction(Request $request)
    {
        $personne = new Utilisateur();
        $carnet = new Carnet();
        $form = $this->createForm(UtilisateurType::class, $personne);
        
        $form->handleRequest($request);
        $error = '';

        if ($form->isSubmitted() && $form->isValid())
        {

            $em = $this->getDoctrine()->getManager();
            $repositoryU = $em->getRepository('AdresseBundle:Utilisateur');

            $personne = $form->getData();
            $result = $repositoryU->findBy(array('login'=>$personne->getLogin()));
            if(!$result)
            {
                $date = new DateTime();
                $date->format('d-m-Y H:i:s');
                $personne->setDateInscription($date);
                $em->persist($personne);
                $em->flush();
                $carnet->setIdTitulaire($personne->getId());
                $carnet->setListUtili(0);
                $em->persist($carnet);
                $em->flush();

                $session = $request->getSession();
                if(!$session->has('id'))
                    $session->set('id',$personne->getId());

                return $this->redirectToRoute('adresse_homepage');
            }
            else
            {
                $error = 'Login est déjà utilisé';
            }
            
        }

        return $this->render('AdresseBundle:Login:inscri.html.twig', array(
            'form' => $form->createView(),
            'error' => $error
        ));
    }

    public function deconnectionAction()
    {
        $this->get('session')->remove('id');
        return $this->redirectToRoute('_connexion');
        
        return $this->render('AdresseBundle:Login:deconnection.html.twig', array(
            // ...
        ));
    }

}
