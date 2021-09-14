<?php


namespace FactoryPattern\Entities;


use FactoryPattern\Abstracts\SocialNetworkPoster;
use FactoryPattern\Factory\SocialNetworkConnector;

/**
 * Date: 2021-09-13
 * Class FacebookPoster
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}