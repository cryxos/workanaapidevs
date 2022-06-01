<?php

namespace App\Domain\Module\Service;

use App\Domain\Module\Repository\ModuleCreatorRepository;
use App\Exception\ValidationException;

final class ModuleCreator
{
    private ModuleCreatorRepository $repository;

    public function __construct(ModuleCreatorRepository $repository)
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
    public function createModule(array $data): int
    {
        // Input validation
        $this->validateNewModule($data);

        // Insert user
        $moduleId = $this->repository->insertModule($data);

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $moduleId));

        return $moduleId;
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
    private function validateNewModule(array $data): void
    {
        $errors = [];

        // Here you can also use your preferred validation library

        if (empty($data['id_guide'])) {
            $errors['id_guide'] = 'Campo requerido';
        }

        if (empty($data['title_module'])) {
            $errors['title_module'] = 'Campo requerido';
        }  

        if (empty($data['desc_module'])) {
            $errors['desc_module'] = 'Campo requerido';
        } 

        if (empty($data['path_module'])) {
            $errors['path_module'] = 'Campo requerido';
        } 

        if ($errors) {
            throw new ValidationException('Please check your input', $errors);
        }
    }
}
 