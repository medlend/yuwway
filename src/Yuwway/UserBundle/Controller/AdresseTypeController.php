<?php

namespace Yuwway\UserBundle\Controller;

use Yuwway\UserBundle\Entity\AdresseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Adressetype controller.
 *
 * @Route("adressetype")
 */
class AdresseTypeController extends Controller
{
    /**
     * Lists all adresseType entities.
     *
     * @Route("/", name="adressetype_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $adresseTypes = $em->getRepository('YuwwayUserBundle:AdresseType')->findAll();

        return $this->render('adressetype/index.html.twig', array(
            'adresseTypes' => $adresseTypes,
        ));
    }

    /**
     * Creates a new adresseType entity.
     *
     * @Route("/new", name="adressetype_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $adresseType = new Adressetype();
        $form = $this->createForm('Yuwway\UserBundle\Form\AdresseTypeType', $adresseType);
        $form->handleRequest($request);

//        dump('test');die;

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adresseType);
            $em->flush($adresseType);

            return $this->redirectToRoute('adressetype_show', array('id' => $adresseType->getId()));
        }

        return $this->render('adressetype/new.html.twig', array(
            'adresseType' => $adresseType,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a adresseType entity.
     *
     * @Route("/{id}", name="adressetype_show")
     * @Method("GET")
     */
    public function showAction(AdresseType $adresseType)
    {
        $deleteForm = $this->createDeleteForm($adresseType);

        return $this->render('adressetype/show.html.twig', array(
            'adresseType' => $adresseType,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing adresseType entity.
     *
     * @Route("/{id}/edit", name="adressetype_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, AdresseType $adresseType)
    {
        $deleteForm = $this->createDeleteForm($adresseType);
        $editForm = $this->createForm('Yuwway\UserBundle\Form\AdresseTypeType', $adresseType);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('adressetype_edit', array('id' => $adresseType->getId()));
        }

        return $this->render('adressetype/edit.html.twig', array(
            'adresseType' => $adresseType,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a adresseType entity.
     *
     * @Route("/{id}", name="adressetype_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, AdresseType $adresseType)
    {
        $form = $this->createDeleteForm($adresseType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adresseType);
            $em->flush($adresseType);
        }

        return $this->redirectToRoute('adressetype_index');
    }

    /**
     * Creates a form to delete a adresseType entity.
     *
     * @param AdresseType $adresseType The adresseType entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(AdresseType $adresseType)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adressetype_delete', array('id' => $adresseType->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
