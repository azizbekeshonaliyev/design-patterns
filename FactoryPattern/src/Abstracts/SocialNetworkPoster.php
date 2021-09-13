<?php


namespace FactoryPattern\Abstracts;


use FactoryPattern\Factory\SocialNetworkConnector;

/**
 * Date: 2021-09-13
 * Class SocialNetworkPoster
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
abstract class SocialNetworkPoster
{
    /**
     * The actual factory method. Note that it returns the abstract connector.
     * This lets subclasses return any concrete connectors without breaking the
     * superclass' contract.
     */
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    /**
     * When the factory method is used inside the Creator's business logic, the
     * subclasses may alter the logic indirectly by returning different types of
     * the connector from the factory method.
     */
    public function post($content)
    {
        // Call the factory method to create a Product object...
        $network = $this->getSocialNetwork();
        // ...then use it as you will.
        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}