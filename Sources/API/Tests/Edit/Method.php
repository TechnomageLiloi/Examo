<?php

namespace Liloi\Examo\API\Tests\Edit;

use Liloi\Examo\Domains\Tests\Manager;
use Liloi\Examo\Domains\Tests\Statuses;
use Liloi\Examo\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = Manager::load($_POST['parameters']['key']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'statuses' => Statuses::$list,
            ])
        ];
    }
}