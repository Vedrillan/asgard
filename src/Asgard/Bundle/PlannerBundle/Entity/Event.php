<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 */
class Event
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $needs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $messages;

    /**
     * @var \Asgard\Bundle\PlannerBundle\Entity\Mode
     */
    private $mode;

    /**
     * @var \Asgard\Bundle\PlannerBundle\Entity\Capacity
     */
    private $capacity;

    /**
     * @var \Asgard\Bundle\PlannerBundle\Entity\Location
     */
    private $location;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->needs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Add needs
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\EventNeed $needs
     * @return Event
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
     * Add messages
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Message $messages
     * @return Event
     */
    public function addMessage(\Asgard\Bundle\PlannerBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;
    
        return $this;
    }

    /**
     * Remove messages
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Message $messages
     */
    public function removeMessage(\Asgard\Bundle\PlannerBundle\Entity\Message $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set mode
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Mode $mode
     * @return Event
     */
    public function setMode(\Asgard\Bundle\PlannerBundle\Entity\Mode $mode = null)
    {
        $this->mode = $mode;
    
        return $this;
    }

    /**
     * Get mode
     *
     * @return \Asgard\Bundle\PlannerBundle\Entity\Mode 
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set capacity
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Capacity $capacity
     * @return Event
     */
    public function setCapacity(\Asgard\Bundle\PlannerBundle\Entity\Capacity $capacity = null)
    {
        $this->capacity = $capacity;
    
        return $this;
    }

    /**
     * Get capacity
     *
     * @return \Asgard\Bundle\PlannerBundle\Entity\Capacity 
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set location
     *
     * @param \Asgard\Bundle\PlannerBundle\Entity\Location $location
     * @return Event
     */
    public function setLocation(\Asgard\Bundle\PlannerBundle\Entity\Location $location = null)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return \Asgard\Bundle\PlannerBundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }
}
