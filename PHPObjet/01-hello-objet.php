<?php
// Programmation impérative
$prenom = 'Romain';
echo "Bonjour $prenom\n";

// Programmation procédurale
$prenom = 'Romain';
function hello($prenom) {
    return "Bonjour $prenom\n";
}
echo hello($prenom);

// Programmation orientée objet
class Contact {
    public $prenom = 'Romain';
    function hello() {
        return "Bonjour $this->prenom\n";
    }
}
$romain = new Contact();
echo $romain->hello();