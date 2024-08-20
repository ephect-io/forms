<?php

namespace Ephect\Forms;

use Ephect\Framework\Structure\Structure;

class ComponentDeclarationStructure extends Structure
{
    public string $uid = '';
    public string $type = '';
    public string $name = '';
    public array $arguments = [];
    public ?array $composition = null;

}