<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * License
 */
class License
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $licenseNumber;

    /**
     * @var \DateTime
     */
    private $issueDate;

    /**
     * @var \DateTime
     */
    private $expireDate;

    /**
     * @var string
     */
    private $type;

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
     * Set licenseNumber
     *
     * @param string $licenseNumber
     * @return License
     */
    public function setLicenseNumber($licenseNumber)
    {
        $this->licenseNumber = $licenseNumber;

        return $this;
    }

    /**
     * Get licenseNumber
     *
     * @return string 
     */
    public function getLicenseNumber()
    {
        return $this->licenseNumber;
    }

    /**
     * Set issueDate
     *
     * @param \DateTime $issueDate
     * @return License
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * Get issueDate
     *
     * @return \DateTime 
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     * @return License
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate
     *
     * @return \DateTime 
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return License
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set applicant
     *
     * @param \SubFinder\AppBundle\Entity\Applicant $applicant
     * @return License
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
