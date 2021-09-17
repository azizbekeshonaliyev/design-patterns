<?php

namespace AbstractFactoryPattern\Interfaces;

/**
 * Date: 2021-09-16
 * Class TemplateFactory
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}