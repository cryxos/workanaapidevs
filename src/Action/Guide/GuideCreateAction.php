<?php

namespace App\Action\Guide;

use App\Domain\Guide\Service\GuideCreator;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class GuideCreateAction
{
    private $guideCreator;

    public function __construct(GuideCreator $guideCreator)
    {
        $this->guideCreator = $guideCreator;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response
    ): ResponseInterface {
        // Collect input from the HTTP request
        $data = (array)$request->getParsedBody();

        // Invoke the Domain with inputs and retain the result
        $guideId = $this->guideCreator->createGuide($data);

        // Transform the result into the JSON representation
        $result = [
            'id_guide' => $guideId
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}