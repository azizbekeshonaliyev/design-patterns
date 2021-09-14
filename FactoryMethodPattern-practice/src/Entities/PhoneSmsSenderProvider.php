<?php

namespace FactoryMethodPattern\Entities;

use FactoryMethodPattern\Abstracts\SmsSenderProvider;
use FactoryMethodPattern\Factory\SmsSender;

/**
 * Date: 2021-09-14
 * Class PhoneSmsSenderProvider
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */

class PhoneSmsSenderProvider extends SmsSenderProvider
{

    private $username, $password;

    /**
     * PhoneSmsSenderProvider constructor.
     * @param $username
     * @param $password
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    function getSmsSender(): SmsSender
    {
        return new PhoneSmsSender($this->username, $this->password);
    }
}