<?php


namespace AbstractFactoryPattern\Abstracts;


use AbstractFactoryPattern\Interfaces\PageTemplate;
use AbstractFactoryPattern\Interfaces\TitleTemplate;

/**
 * Date: 2021-09-16
 * Class BasePageTemplate
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class BasePageTemplate implements PageTemplate
{
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }

    public function getTemplateString(): string
    {
        // TODO: Implement getTemplateString() method.
    }
}