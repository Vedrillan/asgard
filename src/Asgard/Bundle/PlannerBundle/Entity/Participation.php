<?php

namespace Asgard\Bundle\PlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asgard\Bundle\PlannerBundle\Entity\Participation
 */
class Participation
{
    /**
     * @var boolean $retained
     */
    private $retained;

    /**
     * @var boolean $missing
     */
    private $missing;

    /**
     * @var Asgard\Bundle\PlannerBundle\Entity\Event
     */
    private $event;

    /**
     * @var Asgard\Bundle\PlannerBundle\Entity\Player
     */
    private $player;

    /**
     * @var Asgard\Bundle\PlannerBundle\Entity\Role
     */
    private $role;


    /**
     * Set retained
     *
     * @param boolean $retained
     * @return Participation
     */
    public function setRetained($retained)
    {
        $this->retained = $retained;
    
        return $this;
    }

    /**
     * Get retained
     *
     * @return boolean 
     */
    public function getRetained()
    {
        return $this->retained;
    }

    /**
     * Set missing
     *
     * @param boolean $missing
     * @return Participation
     */
    public function setMissing($missing)
    {
        $this->missing = $missing;
    
        return $this;
    }

    /**
     * Get missing
     *
     * @return boolean 
     */
    public function getMissing()
    {
        return $this->missing;
    }

    /**
     * Set event
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Event $event
     * @return Participation
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
     * Set player
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Player $player
     * @return Participation
     */
    public function setPlayer(\Asgard\Bundle\PlannerBundle\Entity\Player $player)
    {
        $this->player = $player;
    
        return $this;
    }

    /**
     * Get player
     *
     * @return Asgard\Bundle\PlannerBundle\Entity\Player 
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set role
     *
     * @param Asgard\Bundle\PlannerBundle\Entity\Role $role
     * @return Participation
     */
    public function setRole(\Asgard\Bundle\PlannerBundle\Entity\Role $role = null)
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
