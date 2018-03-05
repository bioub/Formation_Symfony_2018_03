<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
   /*
    * Exercice : Router
    * Créer un controleur ContactController et 5 actions :
    * - list (/contacts)
    * - show (/contacts/{id})
    * - add (/contacts/add)
    * - update (/contacts/{id}/update)
    * - delete (/contacts/{id}/delete)
    */
    
    
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/hello/{prenom}")
     */
    public function helloAction($prenom) {
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->setContent("<h1>Hello $prenom</h1>");
        return $response;
    }
}
