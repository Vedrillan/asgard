<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classification
 */
class Classification
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $players;

    /**
     * @var \Asgard\Bundle\PlannerBundle\Entity\Game
     */
    private $game;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $races;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
        $this->races = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Classification
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
     * @param \Asgard\Bundle\PlannerBundle\Entity\Player $players
     * @return Classification
     */
    public function addPlayer(\Asgard\Bundle\PlannerBundle\Entity\Player $players)
    {
        $this->players[] = $players;
    
        return $this;
    }

    /**
     * Remove players
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Player $players
     */
    public function removePlayer(\Asgard\Bundle\PlannerBundle\Entity\Player $players)
    {
        $this->players->removeElement($players);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set game
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Game $game
     * @return Classification
     */
    public function setGame(\Asgard\Bundle\PlannerBundle\Entity\Game $game = null)
    {
        $this->game = $game;
    
        return $this;
    }

    /**
     * Get game
     *
     * @return \Asgard\Bundle\PlannerBundle\Entity\Game 
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Add races
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Race $races
     * @return Classification
     */
    public function addRace(\Asgard\Bundle\PlannerBundle\Entity\Race $races)
    {
        $this->races[] = $races;
    
        return $this;
    }

    /**
     * Remove races
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Race $races
     */
    public function removeRace(\Asgard\Bundle\PlannerBundle\Entity\Race $races)
    {
        $this->races->removeElement($races);
    }

    /**
     * Get races
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRaces()
    {
        return $this->races;
    }
}
