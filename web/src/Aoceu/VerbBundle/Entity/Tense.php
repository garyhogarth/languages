<?php

namespace Aoceu\VerbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aoceu\VerbBundle\Entity\Tense
 *
 * @ORM\Table(name="tense")
 * @ORM\Entity(repositoryClass="Aoceu\VerbBundle\Entity\TenseRepository")
 */
class Tense
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
     * @var string $tense
     *
     * @ORM\Column(name="tense", type="string", length=255)
     */
    private $tense;

    
    public function __toString()
    {
        return $this->getTense();
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
     * Set tense
     *
     * @param string $tense
     * @return Tense
     */
    public function setTense($tense)
    {
        $this->tense = $tense;
    
        return $this;
    }

    /**
     * Get tense
     *
     * @return string 
     */
    public function getTense()
    {
        return $this->tense;
    }
}
