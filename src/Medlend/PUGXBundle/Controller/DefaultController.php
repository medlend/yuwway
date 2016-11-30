<?php

namespace Medlend\PUGXBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/medlend")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
       die("test");
        return $this->render('MedlendPUGXBundle:Default:index.html.twig');
    }
}
