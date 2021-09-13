<?php


namespace FactoryPattern\Entities;


use FactoryPattern\Factory\SocialNetworkConnector;

/**
 * Date: 2021-09-13
 * Class LinkedInConnector
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class LinkedInConnector implements SocialNetworkConnector
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn()
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n";
    }

    public function logOut()
    {
        echo "Send HTTP API request to log out user $this->email\n";
    }

    public function createPost($content)
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline.\n";
    }
}