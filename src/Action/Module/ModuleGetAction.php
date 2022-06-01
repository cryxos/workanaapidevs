<?php

namespace App\Action\Module;

use App\Domain\Module\Service\ModuleService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ModuleGetAction
{
    private $moduleService;

    public function __construct(ModuleService $moduleService)
    {
        $this->moduleService = $moduleService;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response
    ): ResponseInterface {
        // Collect input from the HTTP request
        $path = $request->getAttribute('path');

        // Invoke the Domain with inputs and retain the result
        $dataModule = $this->moduleService->getModuleByPath($path);

        // Transform the result into the JSON representation
        $result = [
            'data' => $dataModule
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}