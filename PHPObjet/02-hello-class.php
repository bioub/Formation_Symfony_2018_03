<?php

use M2i\Entity\Contact;

require_once __DIR__ . '/classes/Entity/Contact.php';

// Le nom long d'une : Fully Qualified Class Name (FQCN / FQN)
// ex: M2i\Entity\Contact

$romain = new Contact();
// A éviter : on ne doit normalement pas manipuler
// directement les variables de la classe
// (Principe d'encapsulation)
// $romain->prenom = 'Romain';
$romain->setPrenom('Romain');
echo $romain->getPrenom();