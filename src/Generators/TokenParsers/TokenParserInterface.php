<?php

namespace Ephect\Forms\Generators\TokenParsers;

use Ephect\Forms\Generators\ParserServiceInterface;

interface TokenParserInterface extends ParserServiceInterface
{
    public function doCache(): bool;

    public function doUncache(): bool;

    public function do(null|string|array|object $parameter = null): void;
}