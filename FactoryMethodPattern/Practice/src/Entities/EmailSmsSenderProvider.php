<?php

namespace FactoryMethodPattern\Entities;

use FactoryMethodPattern\Abstracts\SmsSenderProvider;
use FactoryMethodPattern\Factory\SmsSender;

/**
 * Date: 2021-09-14
 * Class EmailSmsSenderProvider
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */

class EmailSmsSenderProvider extends SmsSenderProvider
{
    private $email;

    /**
     * EmailSmsSenderProvider constructor.
     * @param $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    function getSmsSender(): SmsSender
    {
        return new EmailSmsSender($this->email);
    }
}