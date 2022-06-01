<?php
declare(strict_types=1);
namespace App\Domain\Image\Repository;

use PDO;

/**
 * Repository.
 */
final class ImageCreatorRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Insert user row.
     *
     * @param array $user The user
     *
     * @return int The new ID
     */
    public function insertImage(array $image): int
    {
        $row = [ 
            'title_image' => $image['origin'], 
            'path_image' => $image['target']
        ];

        $sql = "INSERT INTO `image` SET  
                title_image=:title_image,  
                path_image=:path_image";

        $this->connection->prepare($sql)->execute($row);

        return (int)$this->connection->lastInsertId();
    }
 
}