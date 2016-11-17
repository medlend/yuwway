<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/11/16
 * Time: 10:30
 */

namespace Yuwway\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class Utilisateur extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Adresse
     * @ORM\OneToMany(targetEntity="Yuwway\UserBundle\Entity\Adresse", mappedBy="user")
     */
    private $adresses ;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $phone;


//* @Assert\Regex(
//*     pattern = "/^0[1-6]{1}(([0-9]{2}){4})|((\s[0-9]{2}){4})|((-[0-9]{2}){4})$/",
//*     message = "number_only")
//* )

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->adresses = new ArrayCollection();
    }

    /**
     * @return Adresse
     */
    public function getAdresses()
    {
        return $this->adresses;
    }

    /**
     * @param Adresse $adresses
     */
    public function setAdresses($adresses)
    {
        $this->adresses = $adresses;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


}