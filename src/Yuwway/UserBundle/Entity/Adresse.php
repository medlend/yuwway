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
     * @ORM\Column(type="string", length=2, nullable=false)
     */
    private $adresse;

    /**
     * @var Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Yuwway\UserBundle\Entity\Utilisateur", inversedBy="adresses")
     */
    private $user;

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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return Utilisateur
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param Utilisateur $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return AdresseType
     */
    public function getAdresseType()
    {
        return $this->adresse_type;
    }

    /**
     * @param AdresseType $adresse_type
     */
    public function setAdresseType($adresse_type)
    {
        $this->adresse_type = $adresse_type;
    }


}