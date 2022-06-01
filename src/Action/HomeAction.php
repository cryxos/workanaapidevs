<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class HomeAction
{
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface {
        $response->getBody()->write(json_encode(['data'=>'Hello, World!', 'success' => true]));

        //$decoded = $request->getAttribute("jwt");
        //$response = $decoded;
        //$result = ['error' => ['message' => 'Validation failed']];
        //$response->getBody()->write(json_encode($result));
        //$response->getBody()->write(json_encode(['success' => true]));        

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}