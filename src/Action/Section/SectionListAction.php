<?php

namespace App\Action\Section;

use App\Domain\Section\Service\SectionService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class SectionListAction
{
    private $sectionService;

    public function __construct(SectionService $sectionService)
    {
        $this->sectionService = $sectionService;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response
    ): ResponseInterface {
        // Collect input from the HTTP request
        //$data = (array)$request->getParsedBody();

        // Invoke the Domain with inputs and retain the result
        $dataSection = $this->sectionService->listarSection();

        // Transform the result into the JSON representation
        $result = [
            'data' => $dataSection
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}