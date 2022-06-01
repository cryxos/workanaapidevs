<?php
declare(strict_types=1);
namespace App\Domain\Image\Repository;
use PDO; 
final class ImageGetRepository
{
    private PDO $connection;
    
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }
 
    public function getImage(): array
    { 
        $query = 'SELECT * FROM `image`';
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return (array) $statement->fetchAll();
    }

}  