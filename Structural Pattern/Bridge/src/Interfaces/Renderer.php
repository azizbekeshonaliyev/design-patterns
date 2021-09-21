<?php


namespace Bridge\Interfaces;


/**
 * Date: 2021-09-21
 * Class Renderer
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
interface Renderer
{
    public function renderTitle(string $title): string;

    public function renderTextBlock(string $text): string;

    public function renderImage(string $url): string;

    public function renderLink(string $url, string $title): string;

    public function renderHeader(): string;

    public function renderFooter(): string;

    public function renderParts(array $parts): string;
}