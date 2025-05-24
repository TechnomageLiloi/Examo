<?php

namespace Liloi\Rune\API\Levels\Create;

use Liloi\Rune\Domains\Levels\Manager;
use Liloi\Rune\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        Manager::create();
        return [];
    }
}