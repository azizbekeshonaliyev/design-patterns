<?php


namespace AbstractFactoryPattern\Classes;


use AbstractFactoryPattern\Interfaces\TemplateRenderer;

/**
 * Date: 2021-09-16
 * Class TwigRenderer
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
//        return Twig::render($templateString, $arguments);
    }
}