<?php

// Sharmecanada/platformBundle/Controller/LogginController.php

namespace Sharmecanada\platformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LogginController extends Controller
{

  public function pageSigninAction()
  {
     return $this->render('SharmecanadaplatformBundle:Loggin:page-signin.html.twig');
  }

  public function pageSignupAction()
  {
     return $this->render('SharmecanadaplatformBundle:Loggin:page-signup.html.twig');
  }

}
