<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 */
class Email
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
     * @var \SubFinder\AppBundle\Entity\Applicant
     */
    private $applicant;

    /**
     * @var \SubFinder\AppBundle\Entity\Applicant
     */
    private $site;


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
     * @return Email
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
     * Set applicant
     *
     * @param \SubFinder\AppBundle\Entity\Applicant $applicant
     * @return Email
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
     * @param \SubFinder\AppBundle\Entity\Applicant $site
     * @return Email
     */
    public function setSite(\SubFinder\AppBundle\Entity\Applicant $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \SubFinder\AppBundle\Entity\Applicant 
     */
    public function getSite()
    {
        return $this->site;
    }
}
