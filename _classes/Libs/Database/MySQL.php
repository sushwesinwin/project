<?php

namespace Libs\Database;

use PDO;
use PDOException;



/* public function connect()
    {
        echo "MySQL Connect <br>";
    }*/

//Create database connection
class MySQL

{
    private $db; //declare properties
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;



    public function __construct( //declare private properties w constructor
        $dbhost = "localhost",
        $dbuser = "root",
        $dbpass = "",
        // $dbname = "project2", test this to catch error w PDO::ERROR
        $dbname = "project",
    ) {
        $this->dbhost = $dbhost;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
        $this->dbname = $dbname;
    }

    public function connect()
    {
        try {
            $this->db = new PDO(
                "mysql:dbhost=$this->dbhost;dbname=$this->dbname",
                $this->dbuser,
                $this->dbpass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // use PDO::ERROR to shown error
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, //to output as object use method from PDO
                ]
            );
            return $this->db;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
