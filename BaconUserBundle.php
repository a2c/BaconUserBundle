<?php

namespace Bacon\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BaconUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
