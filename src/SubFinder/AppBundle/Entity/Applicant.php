<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Applicant
 */
class Applicant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nameLast;

    /**
     * @var string
     */
    private $nameFirst;

    /**
     * @var string
     */
    private $nameMiddle;

    /**
     * @var string
     */
    private $ssn;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \SubFinder\AppBundle\Entity\Location
     */
    private $location;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $application;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $license;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $phone;

    /**
     * @var \SubFinder\AppBundle\Entity\FlavorGender
     */
    private $gender;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->application = new \Doctrine\Common\Collections\ArrayCollection();
        $this->license = new \Doctrine\Common\Collections\ArrayCollection();
        $this->phone = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nameLast
     *
     * @param string $nameLast
     * @return Applicant
     */
    public function setNameLast($nameLast)
    {
        $this->nameLast = $nameLast;

        return $this;
    }

    /**
     * Get nameLast
     *
     * @return string 
     */
    public function getNameLast()
    {
        return $this->nameLast;
    }

    /**
     * Set nameFirst
     *
     * @param string $nameFirst
     * @return Applicant
     */
    public function setNameFirst($nameFirst)
    {
        $this->nameFirst = $nameFirst;

        return $this;
    }

    /**
     * Get nameFirst
     *
     * @return string 
     */
    public function getNameFirst()
    {
        return $this->nameFirst;
    }

    /**
     * Set nameMiddle
     *
     * @param string $nameMiddle
     * @return Applicant
     */
    public function setNameMiddle($nameMiddle)
    {
        $this->nameMiddle = $nameMiddle;

        return $this;
    }

    /**
     * Get nameMiddle
     *
     * @return string 
     */
    public function getNameMiddle()
    {
        return $this->nameMiddle;
    }

    /**
     * Set ssn
     *
     * @param string $ssn
     * @return Applicant
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;

        return $this;
    }

    /**
     * Get ssn
     *
     * @return string 
     */
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Applicant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set location
     *
     * @param \SubFinder\AppBundle\Entity\Location $location
     * @return Applicant
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
     * Add application
     *
     * @param \SubFinder\AppBundle\Entity\Application $application
     * @return Applicant
     */
    public function addApplication(\SubFinder\AppBundle\Entity\Application $application)
    {
        $this->application[] = $application;

        return $this;
    }

    /**
     * Remove application
     *
     * @param \SubFinder\AppBundle\Entity\Application $application
     */
    public function removeApplication(\SubFinder\AppBundle\Entity\Application $application)
    {
        $this->application->removeElement($application);
    }

    /**
     * Get application
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Add license
     *
     * @param \SubFinder\AppBundle\Entity\License $license
     * @return Applicant
     */
    public function addLicense(\SubFinder\AppBundle\Entity\License $license)
    {
        $this->license[] = $license;

        return $this;
    }

    /**
     * Remove license
     *
     * @param \SubFinder\AppBundle\Entity\License $license
     */
    public function removeLicense(\SubFinder\AppBundle\Entity\License $license)
    {
        $this->license->removeElement($license);
    }

    /**
     * Get license
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Add phone
     *
     * @param \SubFinder\AppBundle\Entity\Phone $phone
     * @return Applicant
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
     * Set gender
     *
     * @param \SubFinder\AppBundle\Entity\FlavorGender $gender
     * @return Applicant
     */
    public function setGender(\SubFinder\AppBundle\Entity\FlavorGender $gender = null)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return \SubFinder\AppBundle\Entity\FlavorGender 
     */
    public function getGender()
    {
        return $this->gender;
    }
}
