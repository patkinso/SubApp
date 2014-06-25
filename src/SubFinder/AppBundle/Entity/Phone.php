<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phone
 */
class Phone
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $number;

    /**
     * @var \SubFinder\AppBundle\Entity\FlavorPhone
     */
    private $phoneType;

    /**
     * @var \SubFinder\AppBundle\Entity\Applicant
     */
    private $applicant;


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
     * Set number
     *
     * @param string $number
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set phoneType
     *
     * @param \SubFinder\AppBundle\Entity\FlavorPhone $phoneType
     * @return Phone
     */
    public function setPhoneType(\SubFinder\AppBundle\Entity\FlavorPhone $phoneType = null)
    {
        $this->phoneType = $phoneType;

        return $this;
    }

    /**
     * Get phoneType
     *
     * @return \SubFinder\AppBundle\Entity\FlavorPhone 
     */
    public function getPhoneType()
    {
        return $this->phoneType;
    }

    /**
     * Set applicant
     *
     * @param \SubFinder\AppBundle\Entity\Applicant $applicant
     * @return Phone
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
}
