<?php

    require "vendor/autoload.php";

    use FactoryMethodPattern\Entities\EmailSmsSender;
    use FactoryMethodPattern\Entities\PhoneSmsSender;

    function clientCode($smsSender){
        $smsSender->send("Salom dunyo");
    }

    clientCode(new PhoneSmsSender("azizbek","*****"));
    clientCode(new EmailSmsSender("azizbek"));