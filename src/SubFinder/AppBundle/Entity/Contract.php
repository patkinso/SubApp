<?php

namespace SubFinder\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 */
class Contract
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
     * @var string
     */
    private $explanation;

    /**
     * @var string
     */
    private $acceptText;


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
     * @return Contract
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
     * Set explanation
     *
     * @param string $explanation
     * @return Contract
     */
    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;

        return $this;
    }

    /**
     * Get explanation
     *
     * @return string 
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Set acceptText
     *
     * @param string $acceptText
     * @return Contract
     */
    public function setAcceptText($acceptText)
    {
        $this->acceptText = $acceptText;

        return $this;
    }

    /**
     * Get acceptText
     *
     * @return string 
     */
    public function getAcceptText()
    {
        return $this->acceptText;
    }
}
