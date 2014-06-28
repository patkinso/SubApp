<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 */
class Subject
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
     * @var boolean
     */
    private $interviewRequired;

    /**
     * @var \SubFinder\AppBundle\Entity\FlavorSubjectGroup
     */
    private $group;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $position;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * @return Subject
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
     * @return Subject
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
     * @return Subject
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
     * @return Subject
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
     * Set interviewRequired
     *
     * @param boolean $interviewRequired
     * @return Subject
     */
    public function setInterviewRequired($interviewRequired)
    {
        $this->interviewRequired = $interviewRequired;

        return $this;
    }

    /**
     * Get interviewRequired
     *
     * @return boolean 
     */
    public function getInterviewRequired()
    {
        return $this->interviewRequired;
    }

    /**
     * Set group
     *
     * @param \SubFinder\AppBundle\Entity\FlavorSubjectGroup $group
     * @return Subject
     */
    public function setGroup(\SubFinder\AppBundle\Entity\FlavorSubjectGroup $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \SubFinder\AppBundle\Entity\FlavorSubjectGroup 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Add position
     *
     * @param \SubFinder\AppBundle\Entity\Position $position
     * @return Subject
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
