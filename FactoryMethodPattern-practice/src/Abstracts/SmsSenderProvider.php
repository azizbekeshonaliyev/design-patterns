<?php

namespace FactoryMethodPattern\Abstracts;

use FactoryMethodPattern\Factory\SmsSender;

/**
 * Date: 2021-09-14
 * Class SmsSenderProvider
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */

abstract class SmsSenderProvider
{
    abstract function getSmsSender(): SmsSender;

    public function send($message){
        $sender = $this->getSmsSender();

        $sender->send();
    }
}