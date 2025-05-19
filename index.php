<?php

include_once __DIR__ . '/vendor/autoload.php';

$private = json_decode(file_get_contents(__DIR__ . '/Config/Private.json'), true);

$config = array_merge([
    'title' => 'Codex',
    'start' => 'Requests.layout();',
    'scripts' => [
    ],
    'prefix' => 'codex_'
], $private);

$app = new \Liloi\Codex\Application($config);

echo $app->compile();