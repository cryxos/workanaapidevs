<?php

namespace App\Action\Guide;

use App\Domain\Guide\Service\GuideService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class GuideDelete
{
    private $guideService;

    public function __construct(GuideService $guideService)
    {
        $this->guideService = $guideService;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response
    ): ResponseInterface {
        // Collect input from the HTTP request
        //$data = (array)$request->getParsedBody();
        $id = $request->getAttribute('id');

        // Invoke the Domain with inputs and retain the result
        $dataGuide = $this->guideService->desactivateGuideById($id);

        // Transform the result into the JSON representation
        $result = [
            'data' => $dataGuide
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}