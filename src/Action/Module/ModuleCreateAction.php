<?php

namespace App\Action\Module;

use App\Domain\Module\Service\ModuleCreator;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ModuleCreateAction
{
    private $moduleCreator;

    public function __construct(ModuleCreator $moduleCreator)
    {
        $this->moduleCreator = $moduleCreator;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response
    ): ResponseInterface {
        // Collect input from the HTTP request
        $data = (array)$request->getParsedBody();

        // Invoke the Domain with inputs and retain the result
        $moduleId = $this->moduleCreator->createModule($data);

        // Transform the result into the JSON representation
        $result = [
            'id_module' => $moduleId
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}