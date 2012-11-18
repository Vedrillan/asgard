<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asgard\Bundle\PlannerBundle\Entity\Mode
 */
class Mode
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
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $locations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
        $this->locations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Mode
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
     * @return Mode
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
     * Add locations
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Location $locations
     * @return Mode
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
}
