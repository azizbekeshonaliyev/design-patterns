<?php

namespace FactoryMethodPattern\Entities;


use FactoryMethodPattern\Factory\SmsSender;

/**
 * Date: 2021-09-14
 * Class PhoneSmsSender
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */

class PhoneSmsSender implements SmsSender
{
    private $username,$password;

    /**
     * PhoneSmsSender constructor.
     * @param $username
     * @param $password
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function send(): void
    {
        echo "<b>Sms sent to phone</b>";
    }
}