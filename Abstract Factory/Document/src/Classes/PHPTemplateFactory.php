<?php


namespace AbstractFactoryPattern\Classes;


use AbstractFactoryPattern\Interfaces\TemplateFactory;
use AbstractFactoryPattern\Interfaces\TitleTemplate;
use AbstractFactoryPattern\Interfaces\PageTemplate;
use AbstractFactoryPattern\Interfaces\TemplateRenderer;

    /**
 * Date: 2021-09-16
 * Class PHPTemplateFactory
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}