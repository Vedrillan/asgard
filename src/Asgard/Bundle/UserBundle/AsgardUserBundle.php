<?php

namespace Asgard\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AsgardUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
