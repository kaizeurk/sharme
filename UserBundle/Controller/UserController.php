<?php
// Sharmecanada/platformBundle/Controller/UserController

namespace Sharmecanada\UserBundle\Controller;

use Sharmecanada\UserBundle\Entity\Person\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormFactory;
use PFBC;

class UserController extends Controller
{

  public function addAction(Request $request)
  {
    $user = new User();
    $form = $this->get('form.factory')->createBuilder('form', $user)
      ->add('username',      'text')
      ->add('password',   'repeated', array(
            'type' => 'password',
            'invalid_message' => 'mot de passe incorrect',
            'options' => array('required' => true),
            'first_options' => array('label' => 'Mot de passe'),
            'second_options' => array('label' => 'Re-entrer Mot de Passe'),
      ))
      ->add('Enregistrer','submit')
      ->getForm()
    ;
    // J'ai raccourci cette partie, car c'est plus rapide à écrire !

    //$form->getForm();

    // On fait le lien Requête <-> Formulaire
    // À partir de maintenant, la variable $user contient les valeurs entrées dans le formulaire par le visiteur
    $form->handleRequest($request);

    // On vérifie que les valeurs entrées sont correctes
    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
   if ($form->isValid()) {
      // On l'enregistre notre objet $user dans la base de données, par exemple
      //$em = $this->getDoctrine()->getManager();
      //$em->persist($user);
      //$em->flush();

      //$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      // On redirige vers la page de visualisation de l'annonce nouvellement créée
      return $this->redirect($this->generateUrl('sharmecanadaplatform_home', array('id' => $user->getId())));
    }

    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
    return $this->render('SharmecanadaUserBundle:Loggin:page-signup.html.twig', array(
      'form' => $form->createView(),));
    }


}


