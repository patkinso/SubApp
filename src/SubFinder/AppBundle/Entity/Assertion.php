<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assertion
 */
class Assertion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $OKClicked;

    /**
     * @var \SubFinder\AppBundle\Entity\FlavorAssertion
     */
    private $assertion;

    /**
     * @var \SubFinder\AppBundle\Entity\Application
     */
    private $application;


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
     * Set OKClicked
     *
     * @param boolean $oKClicked
     * @return Assertion
     */
    public function setOKClicked($oKClicked)
    {
        $this->OKClicked = $oKClicked;

        return $this;
    }

    /**
     * Get OKClicked
     *
     * @return boolean 
     */
    public function getOKClicked()
    {
        return $this->OKClicked;
    }

    /**
     * Set assertion
     *
     * @param \SubFinder\AppBundle\Entity\FlavorAssertion $assertion
     * @return Assertion
     */
    public function setAssertion(\SubFinder\AppBundle\Entity\FlavorAssertion $assertion = null)
    {
        $this->assertion = $assertion;

        return $this;
    }

    /**
     * Get assertion
     *
     * @return \SubFinder\AppBundle\Entity\FlavorAssertion 
     */
    public function getAssertion()
    {
        return $this->assertion;
    }

    /**
     * Set application
     *
     * @param \SubFinder\AppBundle\Entity\Application $application
     * @return Assertion
     */
    public function setApplication(\SubFinder\AppBundle\Entity\Application $application = null)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return \SubFinder\AppBundle\Entity\Application 
     */
    public function getApplication()
    {
        return $this->application;
    }
}
