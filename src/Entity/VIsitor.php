<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Visitor extends User {

    /**
     * @ORM\Column(name="email", type="string")
     */
    private string $email;

    public function __construct(string $lastname, string $firstname, string $email)
    {
        parent::__construct($lastname, $firstname);
        $this->email = $email;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email) : self
    {
        $this->email = $email;

        return $this;
    }
}