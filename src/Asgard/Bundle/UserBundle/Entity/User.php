<?php

namespace Asgard\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Document\User as BaseUser;

/**
 * Asgard\Bundle\UserBundle\Entity\User
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     */
    protected $id;


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
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $players;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add players
     *
     * @param Asgard\Bundle\UserBundle\Entity\Player $players
     * @return User
     */
    public function addPlayer(\Asgard\Bundle\UserBundle\Entity\Player $players)
    {
        $this->players[] = $players;
    
        return $this;
    }

    /**
     * Remove players
     *
     * @param Asgard\Bundle\UserBundle\Entity\Player $players
     */
    public function removePlayer(\Asgard\Bundle\UserBundle\Entity\Player $players)
    {
        $this->players->removeElement($players);
    }

    /**
     * Get players
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPlayers()
    {
        return $this->players;
    }
}