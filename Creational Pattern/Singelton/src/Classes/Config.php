<?php


namespace Singleton\Classes;


use Singleton\Abstracts\Singleton;

/**
 * Date: 2021-09-17
 * Class Config
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class Config extends Singleton
{
    private $hashmap = [];

    public function getValue(string $key): string
    {
        return $this->hashmap[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->hashmap[$key] = $value;
    }
}