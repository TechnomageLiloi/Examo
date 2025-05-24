<?php

namespace Liloi\Rune\API\Quests\Save;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domains\Quests\Manager as QuestsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $quest = QuestsManager::loadCurrent();

        $quest->setTitle($_POST['parameters']['title']);
        $quest->setProgram($_POST['parameters']['program']);
        $quest->setStatus($_POST['parameters']['status']);
        $quest->setStart($_POST['parameters']['start']);
        $quest->setTags($_POST['parameters']['tags']);
        $quest->setData($_POST['parameters']['data']);

        $quest->save();

        return [];
    }
}