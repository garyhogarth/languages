<?php

namespace Aoceu\VerbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aoceu\VerbBundle\Entity\Verb
 *
 * @ORM\Table(name="verb")
 * @ORM\Entity(repositoryClass="Aoceu\VerbBundle\Entity\VerbRepository")
 */
class Verb
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
     * @var string $verb
     *
     * @ORM\Column(name="verb", type="string", length=100)
     */
    private $verb;

    
    public function __toString()
    {
        return $this->getVerb();
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
     * @param string $verb
     * @return Verb
     */
    public function setVerb($verb)
    {
        $this->verb = $verb;
    
        return $this;
    }

    /**
     * Get verb
     *
     * @return string 
     */
    public function getVerb()
    {
        return $this->verb;
    }
}
