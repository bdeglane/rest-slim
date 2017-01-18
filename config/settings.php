<?php
$conf = parse_ini_file("config.ini.php",true);

isset($conf["database"]["host"]) ? define ("_DBHOST", $conf["database"]["host"]) : define ("_DBHOST", false);
isset($conf["database"]["database"]) ? define ("_DBNAME", $conf["database"]["database"]) : define ("_DBNAME", false);
isset($conf["database"]["user"]) ? define ("_DBUSER", $conf["database"]["user"]) : define ("_DBUSER", false);
isset($conf["database"]["password"]) ? define ("_DBPWD", $conf["database"]["password"]) : define ("_DBPWD", false);
isset($conf["database"]["driver"]) ? define ("_DBDRIVER", $conf["database"]["driver"]) : define ("_DBDRIVER", false);

isset($conf["key"]["token"]) ? define ("_SECRETKEY", $conf["key"]["token"]) : define ("_SECRETKEY", false);