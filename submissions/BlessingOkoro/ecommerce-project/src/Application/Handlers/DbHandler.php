<?php

namespace App\Application\Handlers;

use PDO;

class DbHandler implements DbHandlerInterface
{
    private $db;

    public function __construct($host, $dbname, $username, $password)
    {
        /**@var PDO $pdo */
        
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $this->db = $pdo;
    
    
    }

    public function getConnection()
    {
        return $this->db;
    }
}