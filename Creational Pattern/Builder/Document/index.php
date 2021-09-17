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