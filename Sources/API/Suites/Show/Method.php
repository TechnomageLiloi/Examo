<?php

namespace Liloi\Examo\API\Suites\Show;

use Liloi\Examo\Domains\Suites\Manager;
use Liloi\Examo\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = Manager::load($_POST['parameters']['key']);
        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}