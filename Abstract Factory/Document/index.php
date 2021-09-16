<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract factory pattern</title>
</head>
<body>
<?php

use AbstractFactoryPattern\Classes\Page;
use AbstractFactoryPattern\Classes\PHPTemplateFactory;

    require "vendor/autoload.php";

    $page = new Page('Sample page', 'This it the body.');

    echo "Testing actual rendering with the PHPTemplate factory:\n";
    echo $page->render(new PHPTemplateFactory());

?>
</body>
</html>