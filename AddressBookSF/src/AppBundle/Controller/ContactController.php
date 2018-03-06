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
        $repo = $this->getDoctrine()->getRepository(\AppBundle\Entity\Contact::class); // ::class apparu en PHP 5.5
        
        $contactsList = $repo->findAll();
        
        return $this->render('AppBundle:Contact:list.html.twig', array(
            'contacts' => $contactsList,
        ));
    }

    /**
     * @Route("/add")
     */
    public function addAction(Request $request) {
        $contactForm = $this->createForm(\AppBundle\Form\ContactType::class);

        $contactForm->handleRequest($request);

        if ($contactForm->isSubmitted() && $contactForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $contact = $contactForm->getData();
            $em->persist($contact);
            $em->flush();
            return $this->redirectToRoute('app_contact_list');
        }


        return $this->render('AppBundle:Contact:add.html.twig', array(
            'contactForm' => $contactForm->createView(),
        ));
    }

    /**
     * @Route("/{id}", requirements = { "id": "[1-9][0-9]*" })
     */
    public function showAction($id) {
        $repo = $this->getDoctrine()->getRepository(\AppBundle\Entity\Contact::class); // ::class apparu en PHP 5.5
        
        $contact = $repo->find($id);
        
        return $this->render('AppBundle:Contact:show.html.twig', array(
            'contact' => $contact,
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
