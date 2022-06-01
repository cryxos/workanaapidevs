<?php

namespace App\Action\Image;

use App\Domain\Image\Service\ImageList;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ImageListAction
{
    private $imageList;

    public function __construct(ImageList $imageList)
    {
        $this->imageList = $imageList;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response
    ): ResponseInterface {
        // Collect input from the HTTP request
        //$data = (array)$request->getParsedBody();

        // Invoke the Domain with inputs and retain the result
        $dataImage = $this->imageList->listarImage();

        // Transform the result into the JSON representation
        $result = [
            'data' => $dataImage
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}