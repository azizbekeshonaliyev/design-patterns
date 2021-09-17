<?php


namespace AbstractFactoryPattern\Classes;


use AbstractFactoryPattern\Interfaces\TemplateFactory;

/**
 * Date: 2021-09-16
 * Class Page
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class Page
{

    public $title;

    public $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    // Here's how would you use the template further in real life. Note that the
    // page class does not depend on any concrete template classes.
    public function render(TemplateFactory $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content
        ]);
    }
}