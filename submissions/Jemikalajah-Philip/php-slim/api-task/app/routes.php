<?php
declare(strict_types=1);
use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\UserAction;
use App\Application\Actions\User\ViewUserAction;
use slim\App\Application\Actions\GetProductAction;
use slim\App\Application\Actions\AddProductAction;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;


return function (App $app) {
    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->get('/products', \App\Application\Actions\ListProductsAction::class);
    $app->post('/product/add', \App\Application\Actions\AddProductsAction::class); 
};
