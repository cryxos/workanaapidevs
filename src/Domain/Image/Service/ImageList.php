<?php

namespace App\Domain\Image\Service;

use App\Domain\Image\Repository\ImageGetRepository;
use App\Exception\ValidationException;

final class ImageList
{
    private ImageGetRepository $repository;

    public function __construct(ImageGetRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Listar a new user.
     * @return array The new user ID
     */
    public function listarImage(): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user
        $arrayImage = $this->repository->getImage();

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $arrayImage;
    }
 
}