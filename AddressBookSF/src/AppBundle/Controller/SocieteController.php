<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * @Route("/societes")
 */
class SocieteController extends Controller
{
    /**
     * @Route("/")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Societe:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/{id}")
     */
    public function showAction($id)
    {
        return $this->render('AppBundle:Societe:show.html.twig', array(
            // ...
        ));
    }

}
