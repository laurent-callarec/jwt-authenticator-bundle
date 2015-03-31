<?php
namespace Elce\JWTAuthenticator\Bundle\Security;

use JWT;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

/**
 * Class JWTUserProvider
 * @package Elce\JWTAuthenticator\Bundle\Security
 */
class JWTUserProvider implements UserProviderInterface
{
    /**
     * @param string   $jwt   The JWT token
     * @return mixed
     */
    public function decodeJWT($jwt)
    {
        return JWT::decode($jwt, '123456');
    }

    /**
     * {@inheritDoc}
     */
    public function loadUserByUsername($data)
    {
        return new User(
            $data->user_id,
            null,
            array('ROLE_USER')
        );
    }

    /**
     * {@inheritDoc}
     */
    public function refreshUser(UserInterface $user)
    {
        throw new UnsupportedUserException();
    }

    /**
     * {@inheritDoc}
     */
    public function supportsClass($class)
    {
        return 'Symfony\Component\Security\Core\User\User' === $class;
    }
}