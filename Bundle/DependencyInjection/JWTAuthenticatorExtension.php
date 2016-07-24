<?php

namespace Elce\JWTAuthenticator\Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Class JWTAuthenticatorExtension
 * @package Elce\JWTAuthenticator\Bundle\DependencyInjection
 */
class JWTAuthenticatorExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $this->processJWTSecretConfiguration($config, $container);
    }


    private function processJWTSecretConfiguration(array $config, ContainerBuilder $container)
    {
        if (!empty($config['jwt_secrets'])) {

        } elseif (!empty($config['jwt_secret'])) {

        } else {
            throw new InvalidConfigurationException('One of jwt_secrets or jwt_secret parameter must be set');
        }
    }
}
