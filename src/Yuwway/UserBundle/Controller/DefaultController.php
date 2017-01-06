<?php

namespace Yuwway\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Yuwway\UserBundle\Entity\Utilisateur;
use Yuwway\UserBundle\Form\ContactType;
use Yuwway\UserBundle\Form\Handler\ContactHandler;

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
        $user = $this->get('security.token_storage')->getToken()->getUser();
        dump($user->getProfile());
        die("test");
        return $this->render('YuwwayUserBundle:Default:index.html.twig');
    }

    /**
     * @Route("/contact", name="contact_route",options={ "method_prefix" = false })
     */
    public function contactAction(Request $request)
    {

        $contactForm = $this->get('form.factory')->create(ContactType::class);

        // Get the handler
        $formHandler = new ContactHandler($contactForm, $request, $this->get('mailer'));

        $process = $formHandler->process();
       // die('a');

        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
            $contactForm->handleRequest($request);

            $data = $contactForm->getData();

            dump($data);die;
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($contactForm->isValid()) {}


        }


        return $this->render('contact/contact.html.twig', array(
            'form' => $contactForm->createView(),
        ));

    }
}
