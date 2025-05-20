<?php

namespace Liloi\Examo\API\Suites\Edit;

use Liloi\Examo\Domains\Suites\Manager as SuitesManager;
use Liloi\Examo\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $suite = SuitesManager::load(SuitesManager::URIToID($_SERVER['REQUEST_URI']));

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'suite' => $suite
            ])
        ];
    }
}