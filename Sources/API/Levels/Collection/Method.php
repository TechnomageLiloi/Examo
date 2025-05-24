<?php

namespace Liloi\Rune\API\Levels\Collection;

use Liloi\Rune\Domains\Levels\Manager as LevelsManager;
use Liloi\Rune\API\Method as AbstractMethod;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends AbstractMethod
{
    public function execute(): array
    {
        $collection = LevelsManager::loadCollection();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'collection' => $collection
            ])
        ];
    }
}