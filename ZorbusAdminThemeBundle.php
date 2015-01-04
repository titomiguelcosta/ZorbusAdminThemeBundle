<?php

namespace Zorbus\AdminThemeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ZorbusAdminThemeBundle extends Bundle
{
    public function getParent()
    {
        return 'SonataAdminBundle';
    }
}
