<?php

namespace Builder\Interfaces;
/**
 * Date: 2021-09-16
 * Class SQLQueryBuilder
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */

interface SQLQueryBuilder
{
    public function select(string $table, array $fields): SQLQueryBuilder;

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder;

    public function limit(int $start, int $offset): SQLQueryBuilder;

    // +100 other SQL syntax methods...

    public function getSQL(): string;
}