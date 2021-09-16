<?php


namespace AbstractFactoryPattern\Classes;


use AbstractFactoryPattern\Interfaces\TitleTemplate;

/**
 * Date: 2021-09-16
 * Class TwigTitleTemplate
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}