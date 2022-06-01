<?php
declare(strict_types=1);
namespace App\Domain\Module\Repository;
use PDO; 
final class ModuleGetRepository
{
    private PDO $connection;
    
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }
 
    public function getModule(): array
    { 
        //$query = 'SELECT * FROM `module` where `flag_module`=1';
        $query = 'SELECT g.name_guide, t.id_module, t.id_guide, t.title_module, t.title_secondary, t.desc_module, t.path_module, t.dateCreated, t.flag_module from module t, guide g  where  g.id_guide = t.id_guide';
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return (array) $statement->fetchAll();
    }

    public function getModuleByPath($path): array
    { 
        //$query = 'SELECT * FROM `module` where `flag_module`=1';         
        $query = 'select m.id_module, m.title_module, m.desc_module, m.dateCreated  from module m where m.path_module="'.$path.'";';
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return (array) $statement->fetchAll();
    }
 
    public function desactivateModleById($id): array
    { 
        //$query = 'SELECT * FROM `module` where `flag_module`=1';         
        $query = 'UPDATE module SET flag_module = 0 WHERE id_module="'.$id.'";';
        $statement = $this->connection->prepare($query);
        //$statement->execute();
 
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