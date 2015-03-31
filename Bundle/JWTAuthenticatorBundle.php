<?php

namespace Elce\JWTAuthenticator\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class JWTAuthenticatorBundle
 *
 * @package Elce\JWTAuthenticator\Bundle
 */
class JWTAuthenticatorBundle extends Bundle
{
    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {
        return 'jwt';
    }
}
