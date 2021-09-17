<?php


namespace FactoryPattern\Factory;


/**
 * Class SocialNetworkConnector
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
interface SocialNetworkConnector
{
    public function logIn();

    public function logOut();

    public function createPost($content);
}