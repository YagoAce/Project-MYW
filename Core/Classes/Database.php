<?php
/**
 * Classe para conexão via PDO com o banco de dados
 * 
 */

namespace Core\Classes;

use PDO;

class Database
{
    private static $drive;
    private static $host;
    private static $dbName;
    private static $user;
    private static $password;

    public static $db;

    private static $pathFileConfig = '././Core/Config/config.ini';

    // implementação do padrão de projetos singleton
    private function __construct(){}

    public static function getInstance()
    {
        try {
            if (!isset(self::$db)) {
                if (file_exists(self::$pathFileConfig)) {
                    $ini = parse_ini_file(self::$pathFileConfig); 

                    if ($ini['mode'] == 'sqlite') {
                        self::$db = new \PDO('sqlite:'.'././Core/Config/database.db');
                    } else {
                        self::$drive    = $ini['drive'];
                        self::$host     = $ini['host'];
                        self::$dbName   = $ini['dbName'];
                        self::$user     = $ini['user'];
                        self::$password = $ini['password'];                
                        // adciona o PDO para a instancia estatica do db
                        self::$db = new \PDO(''. self::$drive .':host='. self::$host .';dbname=' . self::$dbName .'', self::$user, self::$password);                         
                    }   
                    self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                    self::$db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);            
                   
               } else {
                   die('Arquivo de configuração de banco de dados não existente!');
               }
            }
            return self::$db;
        } catch (\Throwable $th) {
            echo 'Erro: ' . $th->getMessage();
        }
           
    }

    public function closeInstance()
    {
        self::$db = null;
    }

}