<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/contacts")
 */
class ContactController extends Controller {

    /**
     * @Route("/")
     */
    public function listAction() {
        return $this->render('AppBundle:Contact:list.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/{id}")
     */
    public function showAction($id) {
        return $this->render('AppBundle:Contact:show.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/add")
     */
    public function addAction() {
        return $this->render('AppBundle:Contact:add.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/{id}/update", requirements = { "id": "[1-9][0-9]*" })
     */
    public function updateAction($id) {
        return $this->render('AppBundle:Contact:update.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/{id}/delete")
     */
    public function deleteAction($id) {
        return $this->render('AppBundle:Contact:delete.html.twig', array(
                        // ...
        ));
    }

}
