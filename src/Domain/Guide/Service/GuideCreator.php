<?php

namespace App\Domain\Guide\Service;

use App\Domain\Guide\Repository\GuideCreatorRepository;
use App\Exception\ValidationException;

final class GuideCreator
{
    private GuideCreatorRepository $repository;

    public function __construct(GuideCreatorRepository $repository)
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
    public function createGuide(array $data): int
    {
        // Input validation
        $this->validateNewGuide($data);

        // Insert user
        $guideId = $this->repository->insertGuide($data);

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $guideId));

        return $guideId;
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
    private function validateNewGuide(array $data): void
    {
        $errors = [];

        // Here you can also use your preferred validation library

        if (empty($data['name_guide'])) {
            $errors['name_guide'] = 'Campo requerido';
        }

        if (empty($data['desc_guide'])) {
            $errors['desc_guide'] = 'Campo requerido';
        }  

        if (empty($data['path_guide'])) {
            $errors['path_guide'] = 'Campo requerido';
        } 

        if ($errors) {
            throw new ValidationException('Please check your input', $errors);
        }
    }
}