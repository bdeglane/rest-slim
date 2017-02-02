<?php


$app->get('/user', App\Bundle\UserBundle\Controller\UserController::class . ':userAction');