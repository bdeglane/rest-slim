<?php
use App\Tool\Database;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__ . "/config/bootstrapDoctrine.php";

return ConsoleRunner::createHelperSet(Database::getEntityManager());