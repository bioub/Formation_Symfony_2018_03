<?php

namespace M2i\Entity;

class Contact {
    // Variables de classes :
    // - propriétés
    // - attributs
    // - champs
    protected $id;
    protected $prenom;
    protected $nom;
    
    // Association (dans Doctrine: ManyToOne)
    /** @var Societe */
    protected $societe;
    
    // fonctions de classes : méthodes
    public function getId() {
        return $this->id;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getSociete() {
        return $this->societe;
    }

    public function setSociete(Societe $societe) {
        $this->societe = $societe;
        return $this;
    }




}
