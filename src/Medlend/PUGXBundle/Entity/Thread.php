<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04/01/17
 * Time: 11:21
 */

namespace Medlend\PUGXBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Thread as BaseThread;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Thread extends BaseThread
{
    /**
     * @var string $id
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $id;
}
