<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prototype</title>
</head>
<body>
<?php

use Prototype\Classes\Author;
use Prototype\Classes\Page;

require "vendor/autoload.php";

    function clientCode()
    {
        $author = new Author("John Smith");
        $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

        // ...

        $page->addComment("Nice tip, thanks!");

        // ...

        $draft = clone $page;
        echo "Dump of the clone. Note that the author is now referencing two objects.\n\n";
        print_r($draft);
    }

clientCode();

?>
?>
</body>
</html>