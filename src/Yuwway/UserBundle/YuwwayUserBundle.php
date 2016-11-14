<?php

namespace Yuwway\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class YuwwayUserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
