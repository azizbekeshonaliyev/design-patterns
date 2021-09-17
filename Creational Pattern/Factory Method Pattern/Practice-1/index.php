<?php

    use FactoryPattern\Factory\AnimalFactory;

    require "vendor/autoload.php";

    $animalFactory = new AnimalFactory();
    $cat = $animalFactory->getAnimal("CAT");
    $dog = $animalFactory->getAnimal("DOG");


    echo "<h1>" . $cat->speak() . "</h1>";
    echo "<h1>" . $dog->speak() . "</h1>";
?>