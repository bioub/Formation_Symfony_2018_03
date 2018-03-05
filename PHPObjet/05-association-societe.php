<?php

require_once __DIR__ . '/classes/Entity/Contact.php';
require_once __DIR__ . '/classes/Entity/Societe.php';

function getSociete() {
    // récupère le contact en DB (modèle)
    $contact1 = new M2i\Entity\Contact();
    $contact1->setPrenom('Bill')->setNom('Gates');

    $contact2 = new M2i\Entity\Contact();
    $contact2->setPrenom('Steve')->setNom('Ballmer');
   
    $societe = new M2i\Entity\Societe();
    $societe->setNom('Microsoft');
    
    $societe->addContact($contact1);
    $societe->addContact($contact2);
    
    return $societe;
}

// code orchestrateur (contrôleur)
$societe = getSociete();

// Génère le HTML (vue)
echo "Nom : " . $societe->getNom() . "\n";
echo "Contacts :\n";

foreach ($societe->getContacts() as $c) {
    echo $c->getNom() . "\n";
}