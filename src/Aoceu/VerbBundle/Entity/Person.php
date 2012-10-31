<?php

namespace Aoceu\VerbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aoceu\VerbBundle\Entity\Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity
 */
class Person
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $compareString
     *
     * @ORM\Column(name="compare_string", type="string", length=20)
     */
    private $compareString;

    /**
     * @var string $pronoun
     *
     * @ORM\Column(name="pronoun", type="string", length=20)
     */
    private $pronoun;

    /**
     * @var string $standard
     *
     * @ORM\Column(name="standard", type="string", length=255)
     */
    private $standard;

    
    public function __toString()
    {
        return $this->getPronoun();
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
     * Set pronoun
     *
     * @param string $pronoun
     * @return Person
     */
    public function setPronoun($pronoun)
    {
        $this->pronoun = $pronoun;
    
        return $this;
    }

    /**
     * Get pronoun
     *
     * @return string 
     */
    public function getPronoun()
    {
        return $this->pronoun;
    }

    /**
     * Set standard
     *
     * @param string $standard
     * @return Person
     */
    public function setStandard($standard)
    {
        $this->standard = $standard;
    
        return $this;
    }

    /**
     * Get standard
     *
     * @return string 
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * Set compareString
     *
     * @param string $compareString
     * @return Person
     */
    public function setCompareString($compareString)
    {
        $this->compareString = $compareString;
    
        return $this;
    }

    /**
     * Get compareString
     *
     * @return string 
     */
    public function getCompareString()
    {
        return $this->compareString;
    }
}