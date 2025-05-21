<?php

namespace Liloi\Examo\API\Tests\Create;

use Liloi\Examo\Domains\Suites\Manager as SuitesManager;
use Liloi\Examo\Domains\Tests\Manager;
use Liloi\Examo\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        Manager::create($_POST['parameters']['key_test'], SuitesManager::URIToID($_SERVER['REQUEST_URI']));
        return [];
    }
}