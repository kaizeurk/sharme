<?php

// Sharmecanada/platformBundle/Controller/LogginController.php

namespace Sharmecanada\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LogginController extends Controller
{

  public function pageSigninAction()
  {
     return $this->render('SharmecanadaUserBundle:Loggin:page-signin.html.twig');
  }

  public function pageSignupAction()
  {
     return $this->render('SharmecanadaUserBundle:Loggin:page-signup.html.twig');
  }

}
