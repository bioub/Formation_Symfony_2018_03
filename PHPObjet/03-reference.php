<?php

require_once __DIR__ . '/classes/Entity/Contact.php';

$prenom1 = 'Jean';

$prenom2 = $prenom1;
$prenom1 = 'Eric';
echo "$prenom2\n"; // Jean

$reference1 = new M2i\Entity\Contact();
$reference1->setPrenom('Jean');

$reference2 = $reference1;
$reference1->setPrenom('Eric');
echo "{$reference2->getPrenom()}\n"; // Eric