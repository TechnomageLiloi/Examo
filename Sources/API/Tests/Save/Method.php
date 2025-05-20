<?php

namespace Liloi\Examo\API\Tests\Save;

use Liloi\Examo\Domains\Tests\Manager;
use Liloi\Examo\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = Manager::load($_POST['parameters']['key_test']);

        $entity->setTitle($_POST['parameters']['title']);
        $entity->setProgram($_POST['parameters']['program']);
        $entity->setStatus($_POST['parameters']['status']);
        $entity->setType($_POST['parameters']['type']);
        $entity->setDone($_POST['parameters']['done']);
        $entity->setHint($_POST['parameters']['hint']);
        $entity->setNote($_POST['parameters']['note']);

        $entity->save();

        return [];
    }
}