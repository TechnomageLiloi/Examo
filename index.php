<?php

include_once __DIR__ . '/vendor/autoload.php';

$private = json_decode(file_get_contents(__DIR__ . '/Config/Private.json'), true);

$config = array_merge([
    'title' => 'Examo',
    'start' => 'Requests.layout();',
    'scripts' => [
    ],
    'prefix' => 'examo_'
], $private);

$app = new \Liloi\Examo\Application($config);

echo $app->compile();