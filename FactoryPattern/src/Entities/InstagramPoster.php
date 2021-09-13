<?php


namespace FactoryPattern\Entities;


use FactoryPattern\Abstracts\SocialNetworkPoster;
use FactoryPattern\Factory\SocialNetworkConnector;

/**
 * Date: 2021-09-13
 * Class InstagramPoster
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class InstagramPoster extends SocialNetworkPoster
{
    private $login, $password;

    /**
     * InstagramPoster constructor.
     * @param $login
     * @param $password
     */
    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new InstagramConnector($this->login,$this->password);
    }
}