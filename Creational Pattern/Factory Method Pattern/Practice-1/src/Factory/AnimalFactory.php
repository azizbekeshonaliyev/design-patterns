<?php

namespace FactoryPattern\Factory;

use FactoryPattern\Entities\Cat;
use FactoryPattern\Entities\Dog;
use FactoryPattern\Interfaces\AnimalInterface;

/**
 * Date: 2021-09-15
 * Class AnimalFactory
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */

class AnimalFactory
{
    public function getAnimal($type): ?AnimalInterface
    {
        switch ($type){
            case "DOG":
                return new Dog();
            case "CAT":
                return new Cat();

            default:
                return null;
        }
    }
}