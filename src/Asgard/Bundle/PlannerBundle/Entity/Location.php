<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asgard\Bundle\PlannerBundle\Entity\Location
 */
class Location
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
    private $events;

    /**
     * @var Asgard\Bundle\PlannerBundle\Entity\Game
     */
    private $game;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $capacities;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $modes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
        $this->capacities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->modes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Location
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
     * Add events
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Event $events
     * @return Location
     */
    public function addEvent(\Asgard\Bundle\PlannerBundle\Entity\Event $events)
    {
        $this->events[] = $events;
    
        return $this;
    }

    /**
     * Remove events
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Event $events
     */
    public function removeEvent(\Asgard\Bundle\PlannerBundle\Entity\Event $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Set game
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Game $game
     * @return Location
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
     * Add capacities
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Capacity $capacities
     * @return Location
     */
    public function addCapacitie(\Asgard\Bundle\PlannerBundle\Entity\Capacity $capacities)
    {
        $this->capacities[] = $capacities;
    
        return $this;
    }

    /**
     * Remove capacities
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Capacity $capacities
     */
    public function removeCapacitie(\Asgard\Bundle\PlannerBundle\Entity\Capacity $capacities)
    {
        $this->capacities->removeElement($capacities);
    }

    /**
     * Get capacities
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCapacities()
    {
        return $this->capacities;
    }

    /**
     * Add modes
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Mode $modes
     * @return Location
     */
    public function addMode(\Asgard\Bundle\PlannerBundle\Entity\Mode $modes)
    {
        $this->modes[] = $modes;
    
        return $this;
    }

    /**
     * Remove modes
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Mode $modes
     */
    public function removeMode(\Asgard\Bundle\PlannerBundle\Entity\Mode $modes)
    {
        $this->modes->removeElement($modes);
    }

    /**
     * Get modes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getModes()
    {
        return $this->modes;
    }
}
