<?php

use App\Tool\Database;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/settings.php";



$isDevMode = true;

// path to entities
$entities = array(
    __DIR__ . '/../app/Bundle/UserBundle/Model'
);
$config = Setup::createAnnotationMetadataConfiguration($entities, $isDevMode);

$conn = array(
    'driver' => _DBDRIVER,
    'host' => _DBHOST,
    'port' => _DBPORT,
    'user' => _DBUSER,
    'password' => _DBPWD,
    'dbname' => _DBNAME
);

// save the entityManager in the database class
$em = EntityManager::create($conn, $config);
Database::setEntityManager($em);