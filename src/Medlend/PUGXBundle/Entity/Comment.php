<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04/01/17
 * Time: 11:20
 */

namespace Medlend\PUGXBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="Medlend\PUGXBundle\Entity\Thread")
     */
    protected $thread;
}