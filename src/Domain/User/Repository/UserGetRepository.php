<?php
declare(strict_types=1);
namespace App\Domain\User\Repository;
use PDO; 
final class UserGetRepository
{
    private PDO $connection;
    
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }
 
    public function getUser(): array
    { 
        $query = 'SELECT * FROM `users`';
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return (array) $statement->fetchAll();
    }

}   