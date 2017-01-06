<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/12/16
 * Time: 09:19
 */

namespace Medlend\PUGXBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity()
 * Class Article
 * @package Medlend\PUGXBundle\Entity
 */
class Article
{
    /**
     * @var
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     */
    private $id;

    /**
     * @ORM\Column(type="text",  nullable=true)
     */
    private $core;

    /**
     * @ORM\Column(type="text",  nullable=true)
     */
    private $auteur;

    /**
     * @ORM\Column(type="text",  nullable=true)
     */
    private $comments;

    /**
     * @ORM\Column(type="datetime",  nullable=true)
     *
     */
    private $date;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Article
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCore()
    {
        return $this->core;
    }

    /**
     * @param mixed $core
     * @return Article
     */
    public function setCore($core)
    {
        $this->core = $core;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     * @return Article
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return Article
     */
    public function setDate($date=null)
    {
        $this->date = (is_null($date)) ? new \DateTime('now'):$date;
        return $this;
    }



}