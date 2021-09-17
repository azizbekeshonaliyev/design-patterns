<?php


namespace AbstractFactoryPattern\Interfaces;


/**
 * Class TemplateRenderer
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}