<?php

namespace Liloi\Rune\API\Quests\Create;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domains\Quests\Manager as QuestsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        QuestsManager::create();
        return [];
    }
}