<?php

namespace App\Domain\Web\Service;

use App\Domain\Web\Repository\WebRepository;
use App\Exception\ValidationException;

final class WebService
{
    private WebRepository $repository;

    public function __construct(WebRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Listar a new user.
     * @return array The new user ID
     */
    public function getModule($path): array
    {
        // Input validation
        // $this->validateNewUser();

        // Insert user
        $array = $this->repository->getModule($path);

        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $array;
    }
    public function loginAuth(array $data){
        // Input validation
        //$this->validateNewGuide($data);

        // Insert user
        $idUser = $this->repository->loginAuth($data);
        
        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $guideId));

        return $idUser;
    }    
 
}