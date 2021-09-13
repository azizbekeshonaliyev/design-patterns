<?php

require 'vendor/autoload.php';

use FactoryPattern\Abstracts\SocialNetworkPoster;
use FactoryPattern\Entities\FacebookPoster;
use FactoryPattern\Entities\LinkedInPoster;

function clientCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));

echo "Test instagram";
clientCode(new \FactoryPattern\Entities\InstagramPoster("asdadadsad","*******"));