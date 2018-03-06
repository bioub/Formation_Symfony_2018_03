<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="contact")
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank(message="Le prénom est obligatoire")
     * @Assert\Length(max="40", maxMessage="Le prénom ne doit dépasser 40 caractères")
     */
    protected $prenom;

    /** @ORM\Column(type="string", length=40) */
    protected $nom;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     * @Assert\Email()
     */
    protected $email;

    /** @ORM\Column(type="string", length=20, nullable=true) */
    protected $telephone;
    
    /** 
     * @var Societe
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Societe", fetch="EAGER")
     */
    protected $societe;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Contact
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Contact
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Contact
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set societe
     *
     * @param \AppBundle\Entity\Societe $societe
     *
     * @return Contact
     */
    public function setSociete(\AppBundle\Entity\Societe $societe = null)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return \AppBundle\Entity\Societe
     */
    public function getSociete()
    {
        return $this->societe;
    }
}
