<?php

use Slim\Http\Request;
use Slim\Http\Response;


require_once 'User/routing.php';

$app->get('/hello/{name}', function (Request $req, Response $res, $args = []) {
    $simple = $res->withStatus(200);
    $json = $simple->withJson(['hello ' . $args['name']]);

    return $json;
});