<?php

namespace FactoryPattern\Entities;

use FactoryPattern\Interfaces\AnimalInterface;

/**
 * Date: 2021-09-15
 * Class Dog
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */

class Dog implements AnimalInterface
{

    public function speak()
    {
        echo "Wow";
    }
}