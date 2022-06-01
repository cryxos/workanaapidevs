<?php
declare(strict_types=1);
namespace App\Domain\Section\Repository;
use PDO; 
final class SectionGetRepository
{
    private PDO $connection;
    
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }
 
    public function getSection(): array
    { 
        //$query = 'SELECT * FROM `section` where `flag_section`=1';
        $query = 'select s.id_section, s.id_module, m.title_module , s.title_section, s.desc_section, s.path_section, s.dateCreated, s.flag_section  
                  from section s, module m where s.flag_section = 1 and m.id_module = s.id_module';

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return (array) $statement->fetchAll();
    }
    
    public function desactivateSectionById($id): array
    { 
        //$query = 'SELECT * FROM `section` where `flag_section`=1';
        $query = 'UPDATE section SET flag_section = 0 WHERE id_section="'.$id.'";';
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

        return (array) $statement->fetchAll();
    }
}