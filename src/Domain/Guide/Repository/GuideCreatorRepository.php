<?php
declare(strict_types=1);
namespace App\Domain\Guide\Repository;

use PDO;

/**
 * Repository.
 */
final class GuideCreatorRepository
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
    public function insertGuide(array $guide): int
    {
        $row = [
            'name_guide' => $guide['name_guide'],
            'desc_guide' => $guide['desc_guide'],
            'path_guide' => $guide['path_guide'], 
        ];

        $sql = "INSERT INTO guide SET 
                name_guide=:name_guide, 
                desc_guide=:desc_guide, 
                path_guide=:path_guide";

        $this->connection->prepare($sql)->execute($row);

        return (int)$this->connection->lastInsertId();
    }
 
}