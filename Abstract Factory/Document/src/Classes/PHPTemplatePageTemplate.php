<?php


namespace AbstractFactoryPattern\Classes;


use AbstractFactoryPattern\Abstracts\BasePageTemplate;

/**
 * Date: 2021-09-16
 * Class PHPTemplatePageTemplate
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class PHPTemplatePageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content"><?= \$content; ?></article>
        </div>
        HTML;
    }
}