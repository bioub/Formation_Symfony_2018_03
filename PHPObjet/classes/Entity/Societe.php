<?php

namespace M2i\Entity;

class Societe {
    protected $id;
    protected $nom;
    protected $ville;
    
    /** @var Contact[] */
    protected $contacts = [];
    
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }

    public function getContacts() {
        return $this->contacts;
    }

    public function addContact(Contact $contact) {
        $this->contacts[] = $contact;
        return $this;
    }


}
