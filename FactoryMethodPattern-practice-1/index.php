<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

use FactoryPattern\Factory\AnimalFactory;

require "vendor/autoload.php";

    $animalFactory = new AnimalFactory();
    $cat = $animalFactory->getAnimal("CAT");
    $dog = $animalFactory->getAnimal("DOG");


    echo "<h1>" . $cat->speak() . "</h1>";
    echo "<h1>" . $dog->speak() . "</h1>";
?>
</body>
</html>