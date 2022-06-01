<?php
declare(strict_types=1);
namespace App\Domain\Module\Repository;

use PDO;

/**
 * Repository.
 */
final class ModuleCreatorRepository
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
    public function insertModule(array $module): int
    {
        $row = [
            'id_guide' => $module['id_guide'],
            'title_module' => $module['title_module'],
            'title_secondary' => $module['title_secondary'],
            'desc_module' => $module['desc_module'], 
            'path_module' => $module['path_module']
        ];

        $sql = "INSERT INTO module SET 
                id_guide=:id_guide, 
                title_module=:title_module, 
                title_secondary=:title_secondary, 
                desc_module=:desc_module,
                path_module=:path_module";

        $this->connection->prepare($sql)->execute($row);

        return (int)$this->connection->lastInsertId();
    }
 
}