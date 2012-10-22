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
     * @var \stdClass $conjugation
     *
     * @ORM\ManyToOne(targetEntity="Conjugation", inversedBy="Conjugations")
     * @ORM\JoinColumn(name="conjugation_id", referencedColumnName="id")
     */
    private $conjugation;


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
     * Set conjugation
     *
     * @param Conjugation $conjugation
     * @return Conjugation
     */
    public function setConjugation(Conjugation $conjugation)
    {
        $this->conjugation = $conjugation;
    
        return $this;
    }

    /**
     * Get conjugation
     *
     * @return Conjugation 
     */
    public function getConjugation()
    {
        return $this->conjugation;
    }
}
