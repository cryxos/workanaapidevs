<?php

namespace App\Action\Web;

use App\Domain\Web\Service\WebService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class WebGetModule
{
    private $webService;

    public function __construct(WebService $webService)
    {
        $this->webService = $webService;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response
    ): ResponseInterface {
        // Collect input from the HTTP request
        //$data = (array)$request->getParsedBody();
        $path = $request->getAttribute('pathguide');

        // Invoke the Domain with inputs and retain the result
        $data = $this->webService->getModule($path);

        // Transform the result into the JSON representation
        $result = [
            'data' => $data
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}