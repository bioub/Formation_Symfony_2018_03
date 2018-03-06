<?php

require_once __DIR__ . '/classes/Entity/Contact.php';

// types scalaires : int, string, array, float, boolean
$prenom1 = 'Jean';

$prenom2 = $prenom1; // passage par valeur
$prenom1 = 'Eric';
echo "$prenom2\n"; // Jean

$reference1 = new M2i\Entity\Contact();
$reference1->setPrenom('Jean');

$reference2 = $reference1; // passage par référence
$reference1->setPrenom('Eric');
echo "{$reference2->getPrenom()}\n"; // Eric