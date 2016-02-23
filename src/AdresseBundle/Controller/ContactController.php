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

class ContactController extends Controller
{
    public function indexAction()
    {
        $session = $this->get('session')->get('id');
        $user = new Carnet();
        $utilisateur = new Utilisateur();
        $em = $this->getDoctrine()->getManager();
        $info = '';

        $user = $em->getRepository('AdresseBundle:Carnet')->findOneBy(array('idTitulaire' => $session));

        if($user->getListUtili() != 0)
        {
            $listUser = explode(',', $user->getListUtili());
            $utilisateur = $em->getRepository('AdresseBundle:Utilisateur')->findBy(array('id'=>$listUser));
        }
        else
        {
            $info = 'Vous n\'avez pas de contact';
        }
        $result = $utilisateur;

        return $this->render('AdresseBundle:Contact:index.html.twig', array(
            'personnes' => $result,
            'contact' => $info
        ));
    }
    
    public function AjoutAction(Request $request)
    {
        $utilisateur = new Utilisateur();
        $carnet = new Carnet();
        $em = $this->getDoctrine()->getManager();
        $session = $this->get('session')->get('id');
        $carnet = $em->getRepository('AdresseBundle:Carnet')->find($session);

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $carnet->setListUtili($id.','.$carnet->getListUtili());
            $em->persist($carnet);
            $em->flush();
        }

        $carnet->setListUtili($session.','.$carnet->getListUtili());
        $qb = $em->createQueryBuilder();
        $utilisateur = $qb->select('u')
            ->from('AdresseBundle:Utilisateur','u')
            ->where('u.id NOT IN ('.$carnet->getListUtili().')')
            ->getQuery()
            ->getResult();

        return $this->render('AdresseBundle:Contact:ajout.html.twig', array(
            'personnes' => $utilisateur
        ));
    }

    public function ModificationAction(Request $request)
    {
        $session = $this->get('session')->get('id');
        $em = $this->getDoctrine()->getManager();

        $utilisateur = $em->getRepository('AdresseBundle:Utilisateur')->find($session);
        
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $date = new DateTime();
            $date->format('d-m-Y H:i:s');
            $utilisateur->setDateInscription($date);
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();

            return $this->redirectToRoute('adresse_homepage');
        }

        return $this->render('AdresseBundle:Contact:modification.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function SuppressionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('AdresseBundle:Utilisateur')->find($id);
        $user = new Carnet();

        $session = $this->get('session')->get('id');

        $user = $em->getRepository('AdresseBundle:Carnet')->findOneBy(array('idTitulaire' => $session));
        if(strstr($user->getListUtili(), $id))
        {
            $listUser = str_replace($id.',', '', $user->getListUtili());
            $user->setListUtili($listUser);
            $em->persist($user);
            $em->flush();
        }
        return $this->redirectToRoute('adresse_homepage');

        return $this->render('AdresseBundle:Contact:index.html.twig', array(
        ));
    }

}
