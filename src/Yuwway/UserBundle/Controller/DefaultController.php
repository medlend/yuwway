<?php

namespace Yuwway\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Yuwway\UserBundle\Entity\Utilisateur;

class DefaultController extends Controller
{
    /**
     * @Route("/medlend")
     */
    public function indexAction()
    {
        /**
         * @var Utilisateur $user
         */
      $user=  $this->get('security.token_storage')->getToken()->getUser();
        dump($user->getProfile());
        die("test");
        return $this->render('YuwwayUserBundle:Default:index.html.twig');
    }
}
