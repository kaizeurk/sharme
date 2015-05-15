<?php

// Sharmecanada/platformBundle/Controller/ContactController.php

namespace Sharmecanada\platformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{

  public function aproposAction()
  {
     return $this->render('SharmecanadaplatformBundle:Contact:page-about-us.html.twig');
  }

  public function contactAction()
  {
     return $this->render('SharmecanadaplatformBundle:Contact:contact-us.html.twig');
  }

}
