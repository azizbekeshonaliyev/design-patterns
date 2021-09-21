<?php


namespace Bridge\Classes;


use Bridge\Abstracts\Page;
use Bridge\Interfaces\Renderer;

/**
 * Date: 2021-09-21
 * Class SimplePage
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class SimplePage extends Page
{
    protected $title;
    protected $content;

    public function __construct(Renderer $renderer, string $title, string $content)
    {
        parent::__construct($renderer);
        $this->title = $title;
        $this->content = $content;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->title),
            $this->renderer->renderTextBlock($this->content),
            $this->renderer->renderFooter()
        ]);
    }
}