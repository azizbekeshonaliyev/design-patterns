<?php


namespace FactoryPattern\Entities;


use FactoryPattern\Factory\SocialNetworkConnector;

/**
 * Date: 2021-09-13
 * Class InstagramConnector
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class InstagramConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn()
    {
        // TODO: Implement logIn() method.
    }

    public function logOut()
    {
        // TODO: Implement logOut() method.
    }

    public function createPost($content)
    {
        // TODO: Implement createPost() method.
    }
}