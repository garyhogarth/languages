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
     * @var integer $table
     *
     * @ORM\Column(name="table_num", type="integer", length=2)
     */
    private $tableNum;
    
    /**
     * @var integer $column
     *
     * @ORM\Column(name="column_num", type="integer", length=2)
     */
    private $columnNum;

    /**
     * @var string $tense
     *
     * @ORM\Column(name="tense", type="string", length=255)
     */
    private $tense;
    
    /**
     * @var string $example
     *
     * @ORM\Column(name="example", type="string", length=255)
     */
    private $example;

    /**
     * @var \stdClass $tense
     *
     * @ORM\ManyToOne(targetEntity="TenseType", inversedBy="Tense")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    
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

    /**
     * Set type
     *
     * @param Aoceu\VerbBundle\Entity\TenseType $type
     * @return Tense
     */
    public function setType(\Aoceu\VerbBundle\Entity\TenseType $type = null)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return Aoceu\VerbBundle\Entity\TenseType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set example
     *
     * @param string $example
     * @return Tense
     */
    public function setExample($example)
    {
        $this->example = $example;
    
        return $this;
    }

    /**
     * Get example
     *
     * @return string 
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * Set tableNum
     *
     * @param integer $tableNum
     * @return Tense
     */
    public function setTableNum($tableNum)
    {
        $this->tableNum = $tableNum;
    
        return $this;
    }

    /**
     * Get tableNum
     *
     * @return integer 
     */
    public function getTableNum()
    {
        return $this->tableNum;
    }

    /**
     * Set columnNum
     *
     * @param integer $columnNum
     * @return Tense
     */
    public function setColumnNum($columnNum)
    {
        $this->columnNum = $columnNum;
    
        return $this;
    }

    /**
     * Get columnNum
     *
     * @return integer 
     */
    public function getColumnNum()
    {
        return $this->columnNum;
    }
}