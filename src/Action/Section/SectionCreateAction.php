<?php

namespace App\Action\Section;

use App\Domain\Section\Service\SectionCreator;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class SectionCreateAction
{
    private $sectionCreator;

    public function __construct(SectionCreator $sectionCreator)
    {
        $this->sectionCreator = $sectionCreator;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response
    ): ResponseInterface {
        // Collect input from the HTTP request
        $data = (array)$request->getParsedBody();

        // Invoke the Domain with inputs and retain the result
        $sectionId = $this->sectionCreator->createSection($data);

        // Transform the result into the JSON representation
        $result = [
            'id_section' => $sectionId
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}