<?php

namespace App\Domain\Guide\Service;

use App\Domain\Guide\Repository\GuideGetRepository;
use App\Exception\ValidationException;

final class GuideService
{
    private GuideGetRepository $repository;

    public function __construct(GuideGetRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Listar a new user.
     * @return array The new user ID
     */
    public function listarGuide(): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user
        $arrayUser = $this->repository->getGuide();

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $arrayUser;
    }

    public function getGuideByPath($path): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user
        $arrayModule = $this->repository->getGuideByPath($path);

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $arrayModule;
    }
    
    public function queryGuideById($id): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user
        $arrayModule = $this->repository->queryGuideById($id);

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $arrayModule;
    }

    public function desactivateGuideById($id): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user
        $arrayModule = $this->repository->desactivateGuideById($id);

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $arrayModule;
    }

    
}