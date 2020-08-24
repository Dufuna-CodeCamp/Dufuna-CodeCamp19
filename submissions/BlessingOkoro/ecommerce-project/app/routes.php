<?php
declare(strict_types=1);
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use App\Application\Actions\ListProductsAction;
use App\Application\Actions\AddProductsAction;

return function (App $app) {
    $app->get('/welcome', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->get('/products', ListProductsAction::class);
    $app->post('/product/add', AddProductsAction::class);
    

};
