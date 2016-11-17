<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17/11/16
 * Time: 09:29
 */

namespace Yuwway\UserBundle\Security;


use FOS\UserBundle\Security\UserProvider;

class EmailUserProvider extends UserProvider
{
    /**
     * {@inheritdoc}
     */
    protected function findUser($email)
    {
        return $this->userManager->findUserByEmail($email);
    }
}
