<?php

namespace App\Bundle\UserBundle\Controller;

use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class UserController
{
    protected $container;

    /**
     * UserController constructor.
     * constructor receives container instance
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function userAction(Request $request, Response $response, $args)
    {
        // your code
        // to access items in the container... $this->container->get('');
//        return $response;
        return 'toto';
    }
}