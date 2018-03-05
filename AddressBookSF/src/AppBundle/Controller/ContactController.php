<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/contacts")
 */
class ContactController extends Controller
{
   
    /**
     * @Route("/")
     */
    public function listAction()
    {
       $response = new \Symfony\Component\HttpFoundation\Response();
       $response->setContent("<h1>List Contact</h1>");
       return $response;
    }
    
    
    
    /**
     * @Route("/{id}")
     */
    public function showAction($id)
    {
       $response = new \Symfony\Component\HttpFoundation\Response();
       $response->setContent("<h1>Show Contact</h1>");
       return $response;
    }
    
    /**
     * @Route("/add")
     */
    public function addAction()
    {
       $response = new \Symfony\Component\HttpFoundation\Response();
       $response->setContent("<h1>Add Contact</h1>");
       return $response;
    }
    
    /**
     * @Route("/{id}/update")
     */
    public function updateAction($id)
    {
       $response = new \Symfony\Component\HttpFoundation\Response();
       $response->setContent("<h1>Update Contact</h1>");
       return $response;
    }
    
    /**
     * @Route("/{id}/delete")
     */
    public function deleteAction($id)
    {
       $response = new \Symfony\Component\HttpFoundation\Response();
       $response->setContent("<h1>Delete Contact</h1>");
       return $response;
    }
    
}
