<?php

namespace App\Domain\Section\Service;

use App\Domain\Section\Repository\SectionGetRepository;
use App\Exception\ValidationException;

final class SectionService
{
    private SectionGetRepository $repository;

    public function __construct(SectionGetRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Listar a new user.
     * @return array The new user ID
     */
    public function listarSection(): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user
        $arraySection = $this->repository->getSection();

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $arraySection;
    }

    public function desactivateSectionById($id): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user
        $arraySection = $this->repository->desactivateSectionById($id);

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $arraySection;
    }
    
    
}