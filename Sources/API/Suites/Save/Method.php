<?php

namespace Liloi\Examo\API\Suites\Save;

use Liloi\Examo\Domains\Suites\Manager;
use Liloi\Examo\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = Manager::load($_POST['parameters']['key']);

        $entity->setTitle($_POST['parameters']['title']);
        $entity->setProgram($_POST['parameters']['program']);
        $entity->setStatus($_POST['parameters']['status']);
        $entity->setGoal($_POST['parameters']['goal']);

        $entity->save();

        return [];
    }
}