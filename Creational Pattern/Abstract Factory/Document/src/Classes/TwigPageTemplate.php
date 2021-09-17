<?php


namespace AbstractFactoryPattern\Classes;


use FactoryMethodPattern\Abstracts\BasePageTemplate;

/**
 * Date: 2021-09-16
 * Class TwigPageTemplate
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class TwigPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content">{{ content }}</article>
        </div>
        HTML;
    }
}