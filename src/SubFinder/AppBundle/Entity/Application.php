<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 */
class Application
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $availability;

    /**
     * @var \SubFinder\AppBundle\Entity\Applicant
     */
    private $applicant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $site;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subject;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $position;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->availability = new \Doctrine\Common\Collections\ArrayCollection();
        $this->site = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subject = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add availability
     *
     * @param \SubFinder\AppBundle\Entity\Availability $availability
     * @return Application
     */
    public function addAvailability(\SubFinder\AppBundle\Entity\Availability $availability)
    {
        $this->availability[] = $availability;

        return $this;
    }

    /**
     * Remove availability
     *
     * @param \SubFinder\AppBundle\Entity\Availability $availability
     */
    public function removeAvailability(\SubFinder\AppBundle\Entity\Availability $availability)
    {
        $this->availability->removeElement($availability);
    }

    /**
     * Get availability
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set applicant
     *
     * @param \SubFinder\AppBundle\Entity\Applicant $applicant
     * @return Application
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
     * Add site
     *
     * @param \SubFinder\AppBundle\Entity\Site $site
     * @return Application
     */
    public function addSite(\SubFinder\AppBundle\Entity\Site $site)
    {
        $this->site[] = $site;

        return $this;
    }

    /**
     * Remove site
     *
     * @param \SubFinder\AppBundle\Entity\Site $site
     */
    public function removeSite(\SubFinder\AppBundle\Entity\Site $site)
    {
        $this->site->removeElement($site);
    }

    /**
     * Get site
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Add subject
     *
     * @param \SubFinder\AppBundle\Entity\Subject $subject
     * @return Application
     */
    public function addSubject(\SubFinder\AppBundle\Entity\Subject $subject)
    {
        $this->subject[] = $subject;

        return $this;
    }

    /**
     * Remove subject
     *
     * @param \SubFinder\AppBundle\Entity\Subject $subject
     */
    public function removeSubject(\SubFinder\AppBundle\Entity\Subject $subject)
    {
        $this->subject->removeElement($subject);
    }

    /**
     * Get subject
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Add position
     *
     * @param \SubFinder\AppBundle\Entity\Position $position
     * @return Application
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
