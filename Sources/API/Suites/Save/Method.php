<?php

namespace Liloi\Examo\API\Suites\Save;

use Liloi\Examo\Domains\Suites\Manager as SuitesManager;
use Liloi\Examo\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $suite = SuitesManager::load(SuitesManager::URIToID($_SERVER['REQUEST_URI']));

        $suite->setTitle($_POST['parameters']['title']);
        $suite->setProgram($_POST['parameters']['program']);
        $suite->setMark($_POST['parameters']['mark']);
        $suite->setData($_POST['parameters']['data']);

        $suite->save();

        return [];
    }
}