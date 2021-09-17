<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Builder</title>
</head>
<body>
<?php


require 'vendor/autoload.php';

use Builder\Classes\{MysqlQueryBuilder,PostgresQueryBuilder};
use Builder\Interfaces\SQLQueryBuilder;

function clientCode(SQLQueryBuilder $queryBuilder)
{
    $query = $queryBuilder
        ->select("users", ["name", "email", "password"])
        ->where("age", 18, ">")
        ->where("age", 30, "<")
        ->limit(10, 20)
        ->getSQL();

    echo "<b>$query</b>";
 }

    echo "Testing MySQL query builder:\n";
    clientCode(new MysqlQueryBuilder());

    echo "\n\n";

    echo "Testing PostgresSQL query builder:\n";
    clientCode(new PostgresQueryBuilder());
    ?>
</body>
</html>