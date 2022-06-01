<?php

namespace App\Domain\User\Service;

use App\Domain\User\Repository\UserGetRepository;
use App\Exception\ValidationException;

final class UserList
{
    private UserGetRepository $repository;

    public function __construct(UserGetRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Listar a new user.
     * @return array The new user ID
     */
    public function listarUser(): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user
        $arrayUser = $this->repository->getUser();

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $arrayUser;
    }
 
}