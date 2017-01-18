<?php

use App\Tool\Database;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/settings.php";

$isDevMode = true;

// path to entities
$entities = array(
    __DIR__ . '/../app/Madame'
);
$config = Setup::createAnnotationMetadataConfiguration($entities, $isDevMode);

$conn = array(
    'driver' => _DBDRIVER,
    'host' => _DBHOST,
    'user' => _DBUSER,
    'password' => _DBPWD,
    'dbname' => _DBNAME
);

// save the entityManager in the database class
Database::setEntityManager(EntityManager::create($conn, $config));