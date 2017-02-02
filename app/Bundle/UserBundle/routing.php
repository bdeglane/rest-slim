<?php
// import controller
use App\Bundle\UserBundle\Controller\UserController;

$app->get('/user', UserController::class . ':userAction');