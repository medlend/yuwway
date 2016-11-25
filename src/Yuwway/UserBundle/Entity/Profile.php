<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/11/16
 * Time: 09:00
 */

namespace Yuwway\UserBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="profile")
 * @ORM\HasLifecycleCallbacks()
 */
class Profile
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
     *
     * @ORM\Column(type="string", length=20,nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20,nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20,nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255,nullable=true)
     *
     * @Assert\Image(
     *      maxSize="1024k",
     *      mimeTypes = { "image/png","image/jpeg", "image/jpg", "image/gif" },
     *      mimeTypesMessage = "Please upload a valid Image"
     * )
     */
    private $image;

    /**
     * @var
     * @ORM\OneToOne(targetEntity="Yuwway\UserBundle\Entity\Utilisateur", inversedBy="profile")
     */
    private $Utilisateur;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="Yuwway\UserBundle\Entity\Adresse", mappedBy="profile",cascade={"persist","remove"})
     */
    private $adresses;

    /**
     * Profile constructor.
     */
    public function __construct()
    {
//        $this->adresses= new ArrayCollection();
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Profile
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Profile
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Profile
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Profile
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set utilisateur
     *
     * @param \Yuwway\UserBundle\Entity\Utilisateur $utilisateur
     *
     * @return Profile
     */
    public function setUtilisateur(\Yuwway\UserBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->Utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Yuwway\UserBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->Utilisateur;
    }

    /**
     * Add adress
     *
     * @param \Yuwway\UserBundle\Entity\Adresse $adress
     *
     * @return Profile
     */
    public function addAdress(\Yuwway\UserBundle\Entity\Adresse $adress)
    {
        $adress->setProfile($this);
        $this->adresses[] = $adress;
        return $this;
    }

    /**
     * Remove adress
     *
     * @param \Yuwway\UserBundle\Entity\Adresse $adress
     */
    public function removeAdress(\Yuwway\UserBundle\Entity\Adresse $adress)
    {
        $this->adresses->removeElement($adress);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
