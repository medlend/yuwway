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


}