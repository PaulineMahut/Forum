<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */
class Admin extends User {

    /**
     * @ORM\Column(name="badgenumber", type="integer")
     */
    private int $badgeNumber;

    public function __construct(string $lastname, string $firstname, int $badgeNumber)
    {
        parent::__construct($lastname, $firstname);

        $this->badgeNumber = $badgeNumber;
    }

    /**
     * Get the value of badgeNumber
     */ 
    public function getBadgeNumber() : int
    {
        return $this->badgeNumber;
    }

    /**
     * Set the value of badgeNumber
     *
     * @return  self
     */ 
    public function setBadgeNumber(int $badgeNumber) : self
    {
        $this->badgeNumber = $badgeNumber;

        return $this;
    }
}