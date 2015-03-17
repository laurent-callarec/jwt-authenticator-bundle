<?php

namespace Elce\JWTAuthenticator\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JWTAuthenticatorBundle extends Bundle
{
    public function getAlias()
    {
        return 'jwt';
    }
}
