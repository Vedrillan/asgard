<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asgard\Bundle\PlannerBundle\Entity\Player
 */
class Player
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var Asgard\Bundle\PlannerBundle\Entity\Game
     */
    private $game;

    /**
     * @var Asgard\Bundle\UserBundle\Entity\User
     */
    private $user;

    /**
     * @var Asgard\Bundle\PlannerBundle\Entity\Race
     */
    private $race;

    /**
     * @var Asgard\Bundle\PlannerBundle\Entity\Classification
     */
    private $classification;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $roles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set name
     *
     * @param string $name
     * @return Player
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set game
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Game $game
     * @return Player
     */
    public function setGame(\Asgard\Bundle\PlannerBundle\Entity\Game $game = null)
    {
        $this->game = $game;
    
        return $this;
    }

    /**
     * Get game
     *
     * @return Asgard\Bundle\PlannerBundle\Entity\Game 
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set user
     *
     * @param Asgard\Bundle\UserBundle\Entity\User $user
     * @return Player
     */
    public function setUser(\Asgard\Bundle\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Asgard\Bundle\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set race
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Race $race
     * @return Player
     */
    public function setRace(\Asgard\Bundle\PlannerBundle\Entity\Race $race = null)
    {
        $this->race = $race;
    
        return $this;
    }

    /**
     * Get race
     *
     * @return Asgard\Bundle\PlannerBundle\Entity\Race 
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set classification
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Classification $classification
     * @return Player
     */
    public function setClassification(\Asgard\Bundle\PlannerBundle\Entity\Classification $classification = null)
    {
        $this->classification = $classification;
    
        return $this;
    }

    /**
     * Get classification
     *
     * @return Asgard\Bundle\PlannerBundle\Entity\Classification 
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Add roles
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Role $roles
     * @return Player
     */
    public function addRole(\Asgard\Bundle\PlannerBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;
    
        return $this;
    }

    /**
     * Remove roles
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Role $roles
     */
    public function removeRole(\Asgard\Bundle\PlannerBundle\Entity\Role $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
