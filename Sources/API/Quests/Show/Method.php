<?php

namespace Liloi\Rune\API\Quests\Show;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domains\Quests\Manager as QuestsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $quest = QuestsManager::loadCurrent();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'quest' => $quest
            ])
        ];
    }
}