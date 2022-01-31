<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"admin"="Admin", "visitor"="Visitor"})
 */
class User {

    /**
     * @ORM\Column(name="lastname", type="string")
     */
    private string $lastname;

    /**
     * @ORM\Column(name="firstname", type="string")
     */
    private string $firstname;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private string $id;

    public function __construct(string $lastname, string $firstname)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname() : string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname(string $lastname) : self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname() : string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname(string $firstname) : self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}