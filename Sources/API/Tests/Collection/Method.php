<?php

namespace Liloi\Examo\API\Tests\Collection;

use Liloi\Examo\Domains\Tests\Manager as TestsManager;
use Liloi\Examo\API\Method as AbstractMethod;

/**
 * Examo API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends AbstractMethod
{
    public function execute(): array
    {
        $collection = TestsManager::loadCollection();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'collection' => $collection
            ])
        ];
    }
}