<?php


namespace FactoryPattern\Entities;


use FactoryPattern\Factory\SocialNetworkConnector;
use FactoryPattern\Abstracts\SocialNetworkPoster;

/**
 * Date: 2021-09-13
 * Class LinkedInPoster
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}