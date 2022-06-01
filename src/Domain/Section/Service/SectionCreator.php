<?php

namespace App\Domain\Section\Service;

use App\Domain\Section\Repository\SectionCreatorRepository;
use App\Exception\ValidationException;

final class SectionCreator
{
    private SectionCreatorRepository $repository;

    public function __construct(SectionCreatorRepository $repository)
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
    public function createSection(array $data): int
    {
        // Input validation
        $this->validateNewSection($data);

        // Insert user
        $sectionId = $this->repository->insertSection($data);

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $sectionId));

        return $sectionId;
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
    private function validateNewSection(array $data): void
    {
        $errors = [];

        // Here you can also use your preferred validation library
  
        if (empty($data['id_module'])) {
            $errors['id_module'] = 'Campo requerido';
        }

        if (empty($data['title_section'])) {
            $errors['title_section'] = 'Campo requerido';
        }  

        if (empty($data['desc_section'])) {
            $errors['desc_section'] = 'Campo requerido';
        } 

        if (empty($data['path_section'])) {
            $errors['path_section'] = 'Campo requerido';
        } 

        if ($errors) {
            throw new ValidationException('Please check your input', $errors);
        }
    }
}
 