<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Availability
 */
class Availability
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $stop;

    /**
     * @var \SubFinder\AppBundle\Entity\Applicant
     */
    private $applicant;

    /**
     * @var \SubFinder\AppBundle\Entity\FlavorDay
     */
    private $day;


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
     * Set start
     *
     * @param \DateTime $start
     * @return Availability
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set stop
     *
     * @param \DateTime $stop
     * @return Availability
     */
    public function setStop($stop)
    {
        $this->stop = $stop;

        return $this;
    }

    /**
     * Get stop
     *
     * @return \DateTime 
     */
    public function getStop()
    {
        return $this->stop;
    }

    /**
     * Set applicant
     *
     * @param \SubFinder\AppBundle\Entity\Applicant $applicant
     * @return Availability
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
     * Set day
     *
     * @param \SubFinder\AppBundle\Entity\FlavorDay $day
     * @return Availability
     */
    public function setDay(\SubFinder\AppBundle\Entity\FlavorDay $day = null)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return \SubFinder\AppBundle\Entity\FlavorDay 
     */
    public function getDay()
    {
        return $this->day;
    }
}
