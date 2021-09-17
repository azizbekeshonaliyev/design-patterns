<?php
    require "vendor/autoload.php";

    use AbstractFactoryPattern\Classes\Page;
    use AbstractFactoryPattern\Classes\PHPTemplateFactory;

    $page = new Page('Sample page', 'This it the body.');

    echo "Testing actual rendering with the PHPTemplate factory:\n";
    echo $page->render(new PHPTemplateFactory());