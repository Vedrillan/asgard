<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asgard\Bundle\PlannerBundle\Entity\Capacity
 */
class Capacity
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $value
     */
    private $value;

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
     * Set value
     *
     * @param integer $value
     * @return Capacity
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Add events
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Event $events
     * @return Capacity
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
     * @return Capacity
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
