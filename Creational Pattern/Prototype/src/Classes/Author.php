<?php


namespace Prototype\Classes;


/**
 * Date: 2021-09-17
 * Class Author
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class Author
{
    private $name;

    /**
     * @var Page[]
     */
    private $pages = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPage(Page $page): void
    {
        $this->pages[] = $page;
    }
}