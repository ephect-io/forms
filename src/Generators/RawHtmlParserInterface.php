<?php

namespace Ephect\Forms\Generators;

interface RawHtmlParserInterface
{
    public function doTag(string $tag): void;

    public function getInnerHtml(): array;

    public function getOuterHtml(): array;
}
