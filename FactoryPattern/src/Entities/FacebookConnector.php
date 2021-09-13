<?php


namespace FactoryPattern\Entities;


use FactoryPattern\Factory\SocialNetworkConnector;

/**
 * Date: 2021-09-13
 * Class FacebookConnector
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn()
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    public function logOut()
    {
        echo "Send HTTP API request to log out user $this->login\n";
    }

    public function createPost($content)
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.\n";
    }
}