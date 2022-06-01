<?php
declare(strict_types=1);
namespace App\Domain\Section\Repository;

use PDO;

/**
 * Repository.
 */
final class SectionCreatorRepository
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
    public function insertSection(array $section): int
    {
        $row = [
            'id_module' => $section['id_module'],
            'title_section' => $section['title_section'],
            'desc_section' => $section['desc_section'], 
            'path_section' => $section['path_section']
        ];

        $sql = "INSERT INTO section SET 
                id_module=:id_module, 
                title_section=:title_section, 
                desc_section=:desc_section,
                path_section=:path_section";

        $this->connection->prepare($sql)->execute($row);

        return (int)$this->connection->lastInsertId();
    }
 
}