<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/api', function (Request $request, Response $response, array $args) {
    $payload = json_encode(['status' => 'OK', 'message' => 'API version v1 is running on port 3000'], JSON_PRETTY_PRINT);
    $response->getBody()->write($payload);
    return $response->withHeader('Content-Type', 'application/json');
});

try {
    $app->run();
} catch (Exception $e) {
    var_dump($e->getMessage(), $e->getCode());
}
