<?php

// Sharmecanada/platformBundle/Controller/AccueilController.php

namespace Sharmecanada\platformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ActivitesController extends Controller
{

  public function listeAction()
  {
     return $this->render('SharmecanadaplatformBundle:Activites:activite-chronologique.html.twig');
  }

}
