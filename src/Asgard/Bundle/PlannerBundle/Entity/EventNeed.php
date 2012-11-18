<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventNeed
 */
class EventNeed
{
    /**
     * @var integer
     */
    private $value;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $participations;

    /**
     * @var \Asgard\Bundle\PlannerBundle\Entity\Event
     */
    private $event;

    /**
     * @var \Asgard\Bundle\PlannerBundle\Entity\Role
     */
    private $role;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->participations = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set value
     *
     * @param integer $value
     * @return EventNeed
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
     * Add participations
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Participation $participations
     * @return EventNeed
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
     * Set event
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Event $event
     * @return EventNeed
     */
    public function setEvent(\Asgard\Bundle\PlannerBundle\Entity\Event $event)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return \Asgard\Bundle\PlannerBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set role
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Role $role
     * @return EventNeed
     */
    public function setRole(\Asgard\Bundle\PlannerBundle\Entity\Role $role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return \Asgard\Bundle\PlannerBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
}
