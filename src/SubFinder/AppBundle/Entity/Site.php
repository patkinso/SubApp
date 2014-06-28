<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 */
class Site
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
    private $alternativeEducation;

    /**
     * @var boolean
     */
    private $bloodbornePathogenClassRegistrationRequired;

    /**
     * @var boolean
     */
    private $specialEducation;

    /**
     * @var \SubFinder\AppBundle\Entity\Location
     */
    private $location;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $phone;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $district;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $position;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->phone = new \Doctrine\Common\Collections\ArrayCollection();
        $this->district = new \Doctrine\Common\Collections\ArrayCollection();
        $this->position = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Site
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
     * Set alternativeEducation
     *
     * @param boolean $alternativeEducation
     * @return Site
     */
    public function setAlternativeEducation($alternativeEducation)
    {
        $this->alternativeEducation = $alternativeEducation;

        return $this;
    }

    /**
     * Get alternativeEducation
     *
     * @return boolean 
     */
    public function getAlternativeEducation()
    {
        return $this->alternativeEducation;
    }

    /**
     * Set bloodbornePathogenClassRegistrationRequired
     *
     * @param boolean $bloodbornePathogenClassRegistrationRequired
     * @return Site
     */
    public function setBloodbornePathogenClassRegistrationRequired($bloodbornePathogenClassRegistrationRequired)
    {
        $this->bloodbornePathogenClassRegistrationRequired = $bloodbornePathogenClassRegistrationRequired;

        return $this;
    }

    /**
     * Get bloodbornePathogenClassRegistrationRequired
     *
     * @return boolean 
     */
    public function getBloodbornePathogenClassRegistrationRequired()
    {
        return $this->bloodbornePathogenClassRegistrationRequired;
    }

    /**
     * Set specialEducation
     *
     * @param boolean $specialEducation
     * @return Site
     */
    public function setSpecialEducation($specialEducation)
    {
        $this->specialEducation = $specialEducation;

        return $this;
    }

    /**
     * Get specialEducation
     *
     * @return boolean 
     */
    public function getSpecialEducation()
    {
        return $this->specialEducation;
    }

    /**
     * Set location
     *
     * @param \SubFinder\AppBundle\Entity\Location $location
     * @return Site
     */
    public function setLocation(\SubFinder\AppBundle\Entity\Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \SubFinder\AppBundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Add phone
     *
     * @param \SubFinder\AppBundle\Entity\Phone $phone
     * @return Site
     */
    public function addPhone(\SubFinder\AppBundle\Entity\Phone $phone)
    {
        $this->phone[] = $phone;

        return $this;
    }

    /**
     * Remove phone
     *
     * @param \SubFinder\AppBundle\Entity\Phone $phone
     */
    public function removePhone(\SubFinder\AppBundle\Entity\Phone $phone)
    {
        $this->phone->removeElement($phone);
    }

    /**
     * Get phone
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add district
     *
     * @param \SubFinder\AppBundle\Entity\District $district
     * @return Site
     */
    public function addDistrict(\SubFinder\AppBundle\Entity\District $district)
    {
        $this->district[] = $district;

        return $this;
    }

    /**
     * Remove district
     *
     * @param \SubFinder\AppBundle\Entity\District $district
     */
    public function removeDistrict(\SubFinder\AppBundle\Entity\District $district)
    {
        $this->district->removeElement($district);
    }

    /**
     * Get district
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Add position
     *
     * @param \SubFinder\AppBundle\Entity\Position $position
     * @return Site
     */
    public function addPosition(\SubFinder\AppBundle\Entity\Position $position)
    {
        $this->position[] = $position;

        return $this;
    }

    /**
     * Remove position
     *
     * @param \SubFinder\AppBundle\Entity\Position $position
     */
    public function removePosition(\SubFinder\AppBundle\Entity\Position $position)
    {
        $this->position->removeElement($position);
    }

    /**
     * Get position
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosition()
    {
        return $this->position;
    }
}
