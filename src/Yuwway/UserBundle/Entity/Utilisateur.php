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
     * @ORM\Column(type="string", length=50)
     */
    private $phone;


    /**
     * @ORM\Column(type="boolean",nullable=true)
     *
     */
    private $hvProfile;


    /**
     * @ORM\OneToOne(targetEntity="Yuwway\UserBundle\Entity\Profile", mappedBy="Utilisateur",cascade={"persist","remove"})
     */
    private $profile;


//* @Assert\Regex(
//*     pattern = "/^0[1-6]{1}(([0-9]{2}){4})|((\s[0-9]{2}){4})|((-[0-9]{2}){4})$/",
//*     message = "number_only")
//* )

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->profile=new Profile();
        $this->profile->setUtilisateur($this);
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

    /**
     * @return mixed
     */
    public function getHvProfile()
    {
        return $this->hvProfile;
    }

    /**
     * @param mixed $hvProfile
     */
    public function setHvProfile($hvProfile)
    {
        $this->hvProfile = $hvProfile;
    }

    /**
     * @return mixed
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param mixed $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }




}