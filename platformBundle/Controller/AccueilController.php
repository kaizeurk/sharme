<?php

// Sharmecanada/platformBundle/Controller/AccueilController.php

namespace Sharmecanada\platformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends Controller
{

  public function indexAction()
  {
     return $this->render('SharmecanadaplatformBundle:Accueil:index.html.twig');
  }

}
