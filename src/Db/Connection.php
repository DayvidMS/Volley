<?php

namespace App\Db;

use PDO;

class Connection {

    private static $db = null;

    const PARAM_host='localhost';
    const PARAM_port='3306';
    const PARAM_db_name='volley';
    const PARAM_user='root';
    const PARAM_db_pass='08072012';    


    public function __construct()
    {
        self::getInstance();
    }

    public static function getInstance() {  
        if (!isset(self::$db)) {  
          try {  
            $pdo = new PDO('mysql:host='.Connection::PARAM_host.';port='.Connection::PARAM_port.';dbname='.Connection::PARAM_db_name,
            Connection::PARAM_user,
            Connection::PARAM_db_pass); 
          } catch (\PDOException $e) {  
            print "Erro: " . $e->getMessage();  
          }  
        }  
        return self::$db;  
      }

    public static function getConn()
    {
        return self::$db;
    }

    public function __destruct()
    {
        unset($db);
    }
}