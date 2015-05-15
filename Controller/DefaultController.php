<?php

namespace Sharmecanada\platformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SharmecanadaplatformBundle:Default:index.html.twig', array('name' => $name));
    }
}
