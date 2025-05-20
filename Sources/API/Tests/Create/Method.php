<?php

namespace Liloi\Examo\API\Tests\Create;

use Liloi\Examo\Domains\Tests\Manager;
use Liloi\Examo\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        Manager::create();
        return [];
    }
}