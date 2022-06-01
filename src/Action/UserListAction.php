<?php

namespace App\Action;

use App\Domain\User\Service\UserList;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class UserListAction
{
    private $userList;

    public function __construct(UserList $userList)
    {
        $this->userList = $userList;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response
    ): ResponseInterface {
        
        //$token = $request->getAttribute("jwt");
        //echo "token =>", $token;
        // Collect input from the HTTP request
        //$data = (array)$request->getParsedBody();

        // Invoke the Domain with inputs and retain the result
        $dataUser = $this->userList->listarUser();

        // Transform the result into the JSON representation
        $result = [
            'data' => $dataUser
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}