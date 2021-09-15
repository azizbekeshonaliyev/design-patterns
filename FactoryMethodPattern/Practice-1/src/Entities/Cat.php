<?php

namespace FactoryPattern\Entities;


use FactoryPattern\Interfaces\AnimalInterface;

/**
 * Date: 2021-09-15
 * Class Cat
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */

class Cat implements AnimalInterface
{
    public function speak()
    {
        echo "Mi ou";
    }
}