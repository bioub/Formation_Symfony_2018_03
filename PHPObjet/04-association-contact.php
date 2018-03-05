<?php

require_once __DIR__ . '/classes/Entity/Contact.php';
require_once __DIR__ . '/classes/Entity/Societe.php';

function getContact() {
    // récupère le contact en DB (modèle)
    $contact = new M2i\Entity\Contact();
    $contact->setPrenom('Bill')->setNom('Gates');
   
    $societe = new M2i\Entity\Societe();
    $societe->setNom('Microsoft');
    
    $contact->setSociete($societe); // concrétise l'association
    // créé le lien entre les 2 objets
    
    return $contact;
}

// code orchestrateur (contrôleur)
$contact = getContact();

// Génère le HTML (vue)
echo "Nom : " . $contact->getNom() . "\n";
echo "Société : " . $contact->getSociete()->getNom() . "\n";