<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asgard\Bundle\PlannerBundle\Entity\EventNeed
 */
class EventNeed
{
    /**
     * @var integer $value
     */
    private $value;

    /**
     * @var Asgard\Bundle\PlannerBundle\Entity\Event
     */
    private $event;

    /**
     * @var Asgard\Bundle\PlannerBundle\Entity\Role
     */
    private $role;


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
     * Set event
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Event $event
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
     * @return Asgard\Bundle\PlannerBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set role
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Role $role
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
     * @return Asgard\Bundle\PlannerBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
}
