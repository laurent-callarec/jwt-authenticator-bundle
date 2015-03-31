<?php

namespace Elce\JWTAuthenticator\Bundle\Controller;

use JWT;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $data = [
            'user_id' => 5,
            'roles' => ['ROLE_USER'],
            'expires_at' => time() + 120
        ];

        return $this->render('JWTAuthenticatorBundle:Default:index.html.twig', array('name' => $name));
    }
}
