<?php

namespace Liloi\Rune\API\Levels\Show;

use Liloi\Rune\Domains\Levels\Manager;
use Liloi\Rune\API\Method as AbstractMethod;

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