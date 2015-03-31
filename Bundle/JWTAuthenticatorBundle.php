<?php

namespace Elce\JWTAuthenticator\Bundle;

use Elce\JWTAuthenticator\Bundle\DependencyInjection\JWTAuthenticatorExtension;
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
    public function getContainerExtension()
    {
        return new JWTAuthenticatorExtension();
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {
        return 'jwt';
    }
}
