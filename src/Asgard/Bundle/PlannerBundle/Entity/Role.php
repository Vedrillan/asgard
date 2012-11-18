<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 */
class Role
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
    private $needs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $participations;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $players;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $games;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->needs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->participations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
        $this->games = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Role
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
     * Add needs
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\EventNeed $needs
     * @return Role
     */
    public function addNeed(\Asgard\Bundle\PlannerBundle\Entity\EventNeed $needs)
    {
        $this->needs[] = $needs;
    
        return $this;
    }

    /**
     * Remove needs
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\EventNeed $needs
     */
    public function removeNeed(\Asgard\Bundle\PlannerBundle\Entity\EventNeed $needs)
    {
        $this->needs->removeElement($needs);
    }

    /**
     * Get needs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNeeds()
    {
        return $this->needs;
    }

    /**
     * Add participations
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Participation $participations
     * @return Role
     */
    public function addParticipation(\Asgard\Bundle\PlannerBundle\Entity\Participation $participations)
    {
        $this->participations[] = $participations;
    
        return $this;
    }

    /**
     * Remove participations
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Participation $participations
     */
    public function removeParticipation(\Asgard\Bundle\PlannerBundle\Entity\Participation $participations)
    {
        $this->participations->removeElement($participations);
    }

    /**
     * Get participations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParticipations()
    {
        return $this->participations;
    }

    /**
     * Add players
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Player $players
     * @return Role
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
     * Add games
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Game $games
     * @return Role
     */
    public function addGame(\Asgard\Bundle\PlannerBundle\Entity\Game $games)
    {
        $this->games[] = $games;
    
        return $this;
    }

    /**
     * Remove games
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Game $games
     */
    public function removeGame(\Asgard\Bundle\PlannerBundle\Entity\Game $games)
    {
        $this->games->removeElement($games);
    }

    /**
     * Get games
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGames()
    {
        return $this->games;
    }
}
