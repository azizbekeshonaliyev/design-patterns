<?php


namespace AbstractFactoryPattern\Classes;


use AbstractFactoryPattern\Interfaces\TitleTemplate;

/**
 * Date: 2021-09-16
 * Class PHPTemplateTitleTemplate
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}