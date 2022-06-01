<?php

declare(strict_types=1);

namespace App\Domain\Web\Repository;

use Firebase\JWT\JWT;
use Tuupola\Base62;
use Tuupola\Middleware\JwtAuthentication;
use PDO;

final class WebRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getModule($path): array
    {
        //$query = 'SELECT * FROM `module` where `flag_module`=1';
        $query = 'select m.id_module,m.title_module from guide g 
        inner join module m on g.id_guide = m.id_guide
        where g.path_guide="' . $path . '" and g.flag_guide=1;';
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return (array) $statement->fetchAll();
    }

    public function loginAuth(array $user): Array
    {
        $a = $user['username'];
        $b = $user['password_user'];

        $row = [
            'username' => $user['username'],
            'password_user' => $user['password_user']
        ];

        $sql = "SELECT id_users, username, email  FROM `users` WHERE username='".$a."' and password_user=md5('".$b."') and flag_users='1';";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $user = (array) $statement->fetchAll();
         
        if (!$user) {
            $user = ["No registrado"];
            return $user;
        } else {             
            $payload = [
                [
                    "iat" => "1428819941",
                    "exp" => "1744352741",
                    "scope" => ["read", "write", "delete"]
                ]
            ];

            $token = JWT::encode($payload, "supersecretkeyyoushouldnotcommittogithub", "HS256");
            //$token =  $user["username"];  //JWT::encode(['id' => $user]);
            //return $this->response->json_encode(['token' => $token]); 

            $data["login"] = "Autorizado"; 
            $data["token"] = $token; 

            return $data;
        } 
        
    }
}
