<?php

namespace Aoceu\VerbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aoceu\VerbBundle\Entity\TenseType
 *
 * @ORM\Table(name="tense_type")
 * @ORM\Entity(repositoryClass="Aoceu\VerbBundle\Entity\TenseTypeRepository")
 */
class TenseType
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
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=100)
     */
    private $type;

    public function __toString()
    {
        return $this->getType();
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
     * Set type
     *
     * @param string $type
     * @return TenseType
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}