<?php

namespace FactoryMethodPattern\Entities;

use FactoryMethodPattern\Factory\SmsSender;

/**
 * Date: 2021-09-14
 * Class EmailSmsSender
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */

class EmailSmsSender implements SmsSender
{
    private $email;

    /**
     * EmailSmsSender constructor.
     * @param $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    public function send(): void
    {
        echo "<br><b>Sms sent to email</b>";
    }
}