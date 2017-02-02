<?php

use App\Tool\Database;
use Slim\App;
use Slim\Container;

require_once '../vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

// push doctrine orm in slim service container
// on key 'orm'
$container = new Container($configuration);
$container['orm'] = Database::getEntityManager();

$app = new App($container);

require_once '../app/Module/moduleIndex.php';

$app->run();