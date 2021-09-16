<?php


namespace AbstractFactoryPattern\Classes;


use AbstractFactoryPattern\Interfaces\TemplateFactory;

/**
 * Date: 2021-09-16
 * Class TwigTemplateFactory
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}