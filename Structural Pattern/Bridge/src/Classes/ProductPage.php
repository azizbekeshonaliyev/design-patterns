<?php


namespace Bridge\Classes;


use Bridge\Abstracts\Page;
use Bridge\Interfaces\Renderer;

/**
 * Date: 2021-09-21
 * Class ProductPage
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class ProductPage extends Page
{
    protected $product;

    public function __construct(Renderer $renderer, Product $product)
    {
        parent::__construct($renderer);
        $this->product = $product;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->product->getTitle()),
            $this->renderer->renderTextBlock($this->product->getDescription()),
            $this->renderer->renderImage($this->product->getImage()),
            $this->renderer->renderLink("/cart/add/" . $this->product->getId(), "Add to cart"),
            $this->renderer->renderFooter()
        ]);
    }
}