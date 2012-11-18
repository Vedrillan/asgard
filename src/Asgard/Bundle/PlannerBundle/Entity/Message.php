<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asgard\Bundle\PlannerBundle\Entity\Message
 */
class Message
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $content
     */
    private $content;

    /**
     * @var \DateTime $date
     */
    private $date;

    /**
     * @var Asgard\Bundle\UserBundle\Entity\User
     */
    private $user;

    /**
     * @var Asgard\Bundle\PlannerBundle\Entity\Event
     */
    private $event;


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
     * Set content
     *
     * @param string $content
     * @return Message
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Message
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
     * Set user
     *
     * @param Asgard\Bundle\UserBundle\Entity\User $user
     * @return Message
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
     * Set event
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Event $event
     * @return Message
     */
    public function setEvent(\Asgard\Bundle\PlannerBundle\Entity\Event $event = null)
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
}
