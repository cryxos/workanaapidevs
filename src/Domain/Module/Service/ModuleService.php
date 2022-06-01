<?php

namespace App\Domain\Module\Service;

use App\Domain\Module\Repository\ModuleGetRepository;
use App\Exception\ValidationException;

final class ModuleService
{
    private ModuleGetRepository $repository;

    public function __construct(ModuleGetRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Listar a new user.
     * @return array The new user ID
     */
    public function listarModule(): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user
        $arrayModule = $this->repository->getModule();

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $arrayModule;
    }

    public function getModuleByPath($path): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user
        $arrayModule = $this->repository->getModuleByPath($path);

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $arrayModule;
    }

    public function desactivateModleById($id): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user                          
        $arrayModule = $this->repository->desactivateModleById($id);

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $arrayModule;
    }
    
 
}