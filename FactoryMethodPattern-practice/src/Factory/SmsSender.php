<?php

namespace FactoryMethodPattern\Factory;


/**
 * Class SmsSender
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */

interface SmsSender
{
    public function send(): void;
}