<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Responses
 *
 * @ORM\Table(name="responses")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResponsesRepository")
 */
class Responses
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
     * @ORM\Column(name="size", type="integer")
     * @Assert\Regex(pattern="/^[\d]*$/",
     * message="La taille du parc doit être un entier non nul"
     * )
     * @Assert\Type(type="integer",
     * message="La taille du parc doit être un entier"
     * )
     */
	private $size;
	
	 /**
     * @ORM\Column(name="number", type="integer")
     * @Assert\Regex(pattern="/^[\d]*$/",
     * message="Le nombre de voitures doit être un entier non nul"
     * )
     * @Assert\Type(type="integer",
     * message="Le nombre de voitures doit être un entier"
     * )
     */
	private $number;
	
	 /**
     * @ORM\Column(name="dateStart", type="date")
     * @Assert\Date()
     */
	private $dateStart;
	
	 /**
     * @ORM\Column(name="dateEnd", type="date")
     * @Assert\Date()
     * @Assert\Expression(
     * "this.getDateStart() <= this.getDateEnd()",
     * message="La date de fin doit apparaître après la date de début"
     * )
     */
	private $dateEnd;
	
	public function __construct(){
		$this->dateStart = new \DateTime(); // affiche la date d'aujourd'hui par défaut
		$this->dateEnd = new \DateTime(); // affiche la date d'aujourd'hui par défaut
	}
	
	// getters et setters
	
	/**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
	
	public function getSize(){
		return $this->size;
	}

	public function setSize($size){
		$this->size = $size;
	}

	public function getNumber(){
		return $this->number;
	}

	public function setNumber($number){
		$this->number = $number;
	}

	public function getDateStart(){
		return $this->dateStart;
	}

	public function setDateStart($dateStart){
		$this->dateStart = $dateStart;
	}

	public function getDateEnd(){
		return $this->dateEnd;
	}

	public function setDateEnd($dateEnd){
		$this->dateEnd = $dateEnd;
	}
}
