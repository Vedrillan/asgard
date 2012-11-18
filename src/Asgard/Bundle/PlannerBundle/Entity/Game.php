<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asgard\Bundle\PlannerBundle\Entity\Game
 */
class Game
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
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $players;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $locations;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $races;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $classifications;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $roles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
        $this->locations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->races = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classifications = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Game
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
     * Add players
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Player $players
     * @return Game
     */
    public function addPlayer(\Asgard\Bundle\PlannerBundle\Entity\Player $players)
    {
        $this->players[] = $players;
    
        return $this;
    }

    /**
     * Remove players
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Player $players
     */
    public function removePlayer(\Asgard\Bundle\PlannerBundle\Entity\Player $players)
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

    /**
     * Add locations
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Location $locations
     * @return Game
     */
    public function addLocation(\Asgard\Bundle\PlannerBundle\Entity\Location $locations)
    {
        $this->locations[] = $locations;
    
        return $this;
    }

    /**
     * Remove locations
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Location $locations
     */
    public function removeLocation(\Asgard\Bundle\PlannerBundle\Entity\Location $locations)
    {
        $this->locations->removeElement($locations);
    }

    /**
     * Get locations
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Add races
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Race $races
     * @return Game
     */
    public function addRace(\Asgard\Bundle\PlannerBundle\Entity\Race $races)
    {
        $this->races[] = $races;
    
        return $this;
    }

    /**
     * Remove races
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Race $races
     */
    public function removeRace(\Asgard\Bundle\PlannerBundle\Entity\Race $races)
    {
        $this->races->removeElement($races);
    }

    /**
     * Get races
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRaces()
    {
        return $this->races;
    }

    /**
     * Add classifications
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Classification $classifications
     * @return Game
     */
    public function addClassification(\Asgard\Bundle\PlannerBundle\Entity\Classification $classifications)
    {
        $this->classifications[] = $classifications;
    
        return $this;
    }

    /**
     * Remove classifications
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Classification $classifications
     */
    public function removeClassification(\Asgard\Bundle\PlannerBundle\Entity\Classification $classifications)
    {
        $this->classifications->removeElement($classifications);
    }

    /**
     * Get classifications
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getClassifications()
    {
        return $this->classifications;
    }

    /**
     * Add roles
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Role $roles
     * @return Game
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
