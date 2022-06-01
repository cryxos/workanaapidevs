<?php

namespace App\Domain\Image\Service;

use App\Domain\Image\Repository\ImageCreatorRepository;
use App\Exception\ValidationException;

final class ImageCreator
{
    private ImageCreatorRepository $repository;

    public function __construct(ImageCreatorRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Create a new user.
     *
     * @param array $data The form data
     *
     * @return int The new user ID
     */
    public function createImage(array $data): int
    {
        // Input validation
        $this->validateNewImage($data);

        // Insert user
        $imageId = $this->repository->insertImage($data);

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $imageId));

        return $imageId;
    }

    /**
     * Input validation.
     *
     * @param array $data The form data
     *
     * @throws ValidationException
     *
     * @return void
     */
    private function validateNewImage(array $data): void
    {
        $errors = [];

        // Here you can also use your preferred validation library
 

        if (empty($data['origin'])) {
            $errors['origin'] = 'Campo requerido';
        }   
        
        if (empty($data['target'])) {
            $errors['target'] = 'Campo requerido';
        } 
  
        if ($errors) {
            throw new ValidationException('Please check your input', $errors);
        }
    }
}

 	 
