<?php

namespace App\Action\Image;

use App\Domain\Image\Service\ImageCreator;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ImageCreateAction
{
    private $imageCreator;

    public function __construct(ImageCreator $imageCreator)
    {
        $this->imageCreator = $imageCreator;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response
    ): ResponseInterface {
        // Collect input from the HTTP request
        $data = (array)$request->getParsedBody();

        // Invoke the Domain with inputs and retain the result
        $imageId = $this->imageCreator->createImage($data);

        // Transform the result into the JSON representation
        $result = [
            'id_image' => $imageId
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}