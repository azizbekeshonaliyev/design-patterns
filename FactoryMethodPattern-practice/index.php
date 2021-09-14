<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factory Method Pattern</title>
</head>
<body>
<?php

use FactoryMethodPattern\Entities\EmailSmsSender;
use FactoryMethodPattern\Entities\PhoneSmsSender;

require "vendor/autoload.php";

function clientCode($smsSender){
    $smsSender->send("Salom dunyo");
}

clientCode(new PhoneSmsSender("azizbek","*****"));
clientCode(new EmailSmsSender("azizbek"));


?>
</body>
</html>