<?php
// Programmation impérative
$nom = 'Romain';
echo "Bonjour $nom\n";

// Programmation procédurale
$nom = 'Romain';
function hello($nomContact) {
    return "Bonjour $nomContact\n";
}
echo hello($nom);

// Programmation orientée objet
class Contact {
    public $nom = 'Romain';
    function hello() {
        return "Bonjour $this->nom\n";
    }
}
$romain = new Contact();
echo $romain->hello();