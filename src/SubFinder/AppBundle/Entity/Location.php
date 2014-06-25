<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 */
class Location
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $apt;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var \SubFinder\AppBundle\Entity\Applicant
     */
    private $applicant;

    /**
     * @var \SubFinder\AppBundle\Entity\Site
     */
    private $site;

    /**
     * @var \SubFinder\AppBundle\Entity\FlavorState
     */
    private $state;


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
     * Set address
     *
     * @param string $address
     * @return Location
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set apt
     *
     * @param string $apt
     * @return Location
     */
    public function setApt($apt)
    {
        $this->apt = $apt;

        return $this;
    }

    /**
     * Get apt
     *
     * @return string 
     */
    public function getApt()
    {
        return $this->apt;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Location
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zip
     *
     * @param string $zip
     * @return Location
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set applicant
     *
     * @param \SubFinder\AppBundle\Entity\Applicant $applicant
     * @return Location
     */
    public function setApplicant(\SubFinder\AppBundle\Entity\Applicant $applicant = null)
    {
        $this->applicant = $applicant;

        return $this;
    }

    /**
     * Get applicant
     *
     * @return \SubFinder\AppBundle\Entity\Applicant 
     */
    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * Set site
     *
     * @param \SubFinder\AppBundle\Entity\Site $site
     * @return Location
     */
    public function setSite(\SubFinder\AppBundle\Entity\Site $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \SubFinder\AppBundle\Entity\Site 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set state
     *
     * @param \SubFinder\AppBundle\Entity\FlavorState $state
     * @return Location
     */
    public function setState(\SubFinder\AppBundle\Entity\FlavorState $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \SubFinder\AppBundle\Entity\FlavorState 
     */
    public function getState()
    {
        return $this->state;
    }
}
