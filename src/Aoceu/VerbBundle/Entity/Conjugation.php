<?php

namespace Aoceu\VerbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aoceu\VerbBundle\Entity\Conjugation
 *
 * @ORM\Table(name="conjugation")
 * @ORM\Entity(repositoryClass="Aoceu\VerbBundle\Entity\ConjugationRepository")
 */
class Conjugation
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
     * @var \stdClass $verb
     *
     * @ORM\ManyToOne(targetEntity="Verb", inversedBy="Conjugations")
     * @ORM\JoinColumn(name="verb_id", referencedColumnName="id")
     */
    private $verb;

    /**
     * @var \stdClass $tense
     *
     * @ORM\ManyToOne(targetEntity="Tense", inversedBy="Conjugations")
     * @ORM\JoinColumn(name="tense_id", referencedColumnName="id")
     */
    private $tense;

    /**
     * @var \stdClass $person
     *
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="Conjugations")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $person;

    /**
     * @var string $conjugation
     *
     * @ORM\Column(name="conjugation", type="string", length=255)
     */
    private $conjugation;
    
    /**
     * @var boolean $irregular
     *
     * @ORM\Column(name="irregular", type="boolean")
     */
    private $irregular = 0;

    
    public function __toString()
    {
        return $this->getConjugation();
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
     * Set verb
     *
     * @param Verb $verb
     * @return Conjugation
     */
    public function setVerb(Verb $verb)
    {
        $this->verb = $verb;
    
        return $this;
    }

    /**
     * Get verb
     *
     * @return Tense 
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * Set tense
     *
     * @param Tense $tense
     * @return Conjugation
     */
    public function setTense(Tense $tense)
    {
        $this->tense = $tense;
    
        return $this;
    }

    /**
     * Get tense
     *
     * @return Tense
     */
    public function getTense()
    {
        return $this->tense;
    }

    /**
     * Set person
     *
     * @param Person $person
     * @return Conjugation
     */
    public function setPerson(Person $person)
    {
        $this->person = $person;
    
        return $this;
    }

    /**
     * Get person
     *
     * @return Person 
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set standard
     *
     * @param bool $standard
     * @return Conjugation
     */
    public function setStandard(\bool $standard)
    {
        $this->standard = $standard;
    
        return $this;
    }

    /**
     * Get standard
     *
     * @return bool 
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * Set irregular
     *
     * @param boolean $irregular
     * @return Conjugation
     */
    public function setIrregular($irregular)
    {
        $this->irregular = $irregular;
    
        return $this;
    }

    /**
     * Get irregular
     *
     * @return boolean 
     */
    public function getIrregular()
    {
        return $this->irregular;
    }

    /**
     * Set conjugation
     *
     * @param string $conjugation
     * @return Conjugation
     */
    public function setConjugation($conjugation)
    {
        $this->conjugation = $conjugation;
    
        return $this;
    }

    /**
     * Get conjugation
     *
     * @return string 
     */
    public function getConjugation()
    {
        return $this->conjugation;
    }
}