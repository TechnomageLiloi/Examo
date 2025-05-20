<?php

namespace Liloi\Examo\API\Suites\Create;

use Liloi\Examo\Domains\Suites\Manager;
use Liloi\Examo\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        Manager::create();
        return [];
    }
}