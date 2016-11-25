<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/11/16
 * Time: 15:53
 */

namespace Yuwway\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="adresse")
 */
class Adresse
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
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    private $adresse;

    /**
     * @var Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Yuwway\UserBundle\Entity\Profile", inversedBy="adresses")
     */
    private $profile;

    /**
     * @var AdresseType
     * @ORM\ManyToOne(targetEntity="Yuwway\UserBundle\Entity\AdresseType", inversedBy="adresse")
     */
    private $adresse_type;

    /**
     * Adresse constructor.
     */
    public function __construct()
    {
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Adresse
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
     * Set profile
     *
     * @param \Yuwway\UserBundle\Entity\Profile $profile
     *
     * @return Adresse
     */
    public function setProfile(\Yuwway\UserBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \Yuwway\UserBundle\Entity\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set adresseType
     *
     * @param \Yuwway\UserBundle\Entity\AdresseType $adresseType
     *
     * @return Adresse
     */
    public function setAdresseType(\Yuwway\UserBundle\Entity\AdresseType $adresseType = null)
    {
        $this->adresse_type = $adresseType;

        return $this;
    }

    /**
     * Get adresseType
     *
     * @return \Yuwway\UserBundle\Entity\AdresseType
     */
    public function getAdresseType()
    {
        return $this->adresse_type;
    }
}
