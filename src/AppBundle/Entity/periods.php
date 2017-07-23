<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * periods
 *
 * @ORM\Table(name="periods")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\periodsRepository")
 */
class periods
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     
     private $id;
     
    /** 
     * Many Periods have one type
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Types")
     * @ORM\JoinColumn(name="id_type", referencedColumnName="id")
     */  
      
    private $types;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date")
     * @Assert\Valid()
     */
    private $date_start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date")
     * @Assert\Valid()
     */
    private $date_end;

    /**
     * @var int
     *
     * @ORM\Column(name="id_type", type="integer", length=11)
     */
    private $id_type;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250)
     */
    private $name;
	
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setTypes(Types $types){
		$this->types = $types;
		
		return $this;
	}
	
	public function getTypes(){
		return $this->types;
	}

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return periods
     */
    public function setDateStart($dateStart)
    {
        $this->date_start = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->date_start;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return periods
     */
    public function setDateEnd($dateEnd)
    {
        $this->date_end = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * Set idType
     *
     * @param integer $idType
     *
     * @return periods
     */
    public function setIdType($idType)
    {
        $this->id_type = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return int
     */
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return periods
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
}

