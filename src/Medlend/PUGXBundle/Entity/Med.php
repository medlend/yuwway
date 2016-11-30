<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/11/16
 * Time: 11:34
 */

namespace Medlend\PUGXBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * Class Med
 * @package Medlend\PUGXBundle\Entity
 */
class Med
{

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="text",  nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $float;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(type="integer", length=20, nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $gendre;

    /**
     * @var string
     *
     * @ORM\Column(type="datetime", length=20, nullable=false)
     */
    private $datetime;






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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Med
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set float
     *
     * @param float $float
     *
     * @return Med
     */
    public function setFloat($float)
    {
        $this->float = $float;

        return $this;
    }

    /**
     * Get float
     *
     * @return float
     */
    public function getFloat()
    {
        return $this->float;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Med
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Med
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Med
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set gendre
     *
     * @param boolean $gendre
     *
     * @return Med
     */
    public function setGendre($gendre)
    {
        $this->gendre = $gendre;

        return $this;
    }

    /**
     * Get gendre
     *
     * @return boolean
     */
    public function getGendre()
    {
        return $this->gendre;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return Med
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }
}
