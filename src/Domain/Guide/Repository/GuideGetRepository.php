<?php
declare(strict_types=1);
namespace App\Domain\Guide\Repository;
use PDO; 
final class GuideGetRepository
{
    private PDO $connection;
    
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }
 
    public function getGuide(): array
    { 
        $query = 'SELECT * FROM `guide`';
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return (array) $statement->fetchAll();
    }
    
    public function getGuideByPath($path): array
    { 
        //$query = 'SELECT * FROM `module` where `flag_module`=1';         
        $query = 'select g.id_guide, g.name_guide, g.desc_guide, g.path_guide, dateCreated from guide g where g.path_guide="'.$path.'" and g.flag_guide = 1;';
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return (array) $statement->fetchAll();
    }

    public function queryGuideById($id): array
    { 
        //$query = 'SELECT * FROM `module` where `flag_module`=1';         
        $query = 'SELECT * from guide where id_guide="'.$id.'";';
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return (array) $statement->fetchAll(); 
    }

    public function desactivateGuideById($id): array
    { 
        //$query = 'SELECT * FROM `module` where `flag_module`=1';         
        $query = 'UPDATE guide SET flag_guide = 0 WHERE id_guide="'.$id.'";';
        $statement = $this->connection->prepare($query);
        
        if($statement->execute()){
            $response = array(
                'status' => 200,
                'msg' => "Actualizado correctamente"
            );
            return (array) $response;
        }else{
            $response = array(
                'status' => 500,
                'msg' => "No se actualizo"
            );
            return (array) $response;
        }
 
    }
 
} 