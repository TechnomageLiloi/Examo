<?php

namespace Liloi\Rune\API\Services\Files\Show;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Stylo\Parser;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $URI = $_SERVER['REQUEST_URI'];
        $root = self::getConfig()['root'];
        $name = $_POST['parameters']['name'];

        $path = ROOT_DIR . $root . $URI . '/' . $name;
        $data = file_get_contents($path);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'info' => Parser::parseString($data)
            ])
        ];
    }
}