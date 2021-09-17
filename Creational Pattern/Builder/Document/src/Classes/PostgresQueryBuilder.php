<?php


namespace Builder\Classes;


use Builder\Interfaces\SQLQueryBuilder;

/**
 * Date: 2021-09-16
 * Class PostgresQueryBuilder
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class PostgresQueryBuilder extends MysqlQueryBuilder
{
    /**
     * Among other things, PostgreSQL has slightly different LIMIT syntax.
     */
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }

}