<?php
namespace Elce\JWTAuthenticator\Bundle\Security;

use JWT;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class JWTUserProvider implements UserProviderInterface
{
    public function decodeJWT($jwt)
    {
        return JWT::decode($jwt, '123456');
    }

    public function loadUserByUsername($data)
    {
        return new User(
            $data->user_id,
            null,
            array('ROLE_USER')
        );
    }

    public function refreshUser(UserInterface $user)
    {
        throw new UnsupportedUserException();
    }

    public function supportsClass($class)
    {
        return 'Symfony\Component\Security\Core\User\User' === $class;
    }
}