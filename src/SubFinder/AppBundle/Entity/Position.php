<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Position
 */
class Position
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
     * @var boolean
     */
    private $lisenceRequired;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $incompatibleWith;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $incompatibleTo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->incompatibleWith = new \Doctrine\Common\Collections\ArrayCollection();
        $this->incompatibleTo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Position
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
     * Set lisenceRequired
     *
     * @param boolean $lisenceRequired
     * @return Position
     */
    public function setLisenceRequired($lisenceRequired)
    {
        $this->lisenceRequired = $lisenceRequired;

        return $this;
    }

    /**
     * Get lisenceRequired
     *
     * @return boolean 
     */
    public function getLisenceRequired()
    {
        return $this->lisenceRequired;
    }

    /**
     * Add incompatibleWith
     *
     * @param \SubFinder\AppBundle\Entity\Position $incompatibleWith
     * @return Position
     */
    public function addIncompatibleWith(\SubFinder\AppBundle\Entity\Position $incompatibleWith)
    {
        $this->incompatibleWith[] = $incompatibleWith;

        return $this;
    }

    /**
     * Remove incompatibleWith
     *
     * @param \SubFinder\AppBundle\Entity\Position $incompatibleWith
     */
    public function removeIncompatibleWith(\SubFinder\AppBundle\Entity\Position $incompatibleWith)
    {
        $this->incompatibleWith->removeElement($incompatibleWith);
    }

    /**
     * Get incompatibleWith
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIncompatibleWith()
    {
        return $this->incompatibleWith;
    }

    /**
     * Add incompatibleTo
     *
     * @param \SubFinder\AppBundle\Entity\Position $incompatibleTo
     * @return Position
     */
    public function addIncompatibleTo(\SubFinder\AppBundle\Entity\Position $incompatibleTo)
    {
        $this->incompatibleTo[] = $incompatibleTo;

        return $this;
    }

    /**
     * Remove incompatibleTo
     *
     * @param \SubFinder\AppBundle\Entity\Position $incompatibleTo
     */
    public function removeIncompatibleTo(\SubFinder\AppBundle\Entity\Position $incompatibleTo)
    {
        $this->incompatibleTo->removeElement($incompatibleTo);
    }

    /**
     * Get incompatibleTo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIncompatibleTo()
    {
        return $this->incompatibleTo;
    }
}
