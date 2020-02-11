<?php

include ('config.php');
/*
$servername = "localhost";
$username = "root";
$password = "nasi";
$dbname = "notexchange";


*/
/*
try {
    // $sConn = "mysql:host=$servername;dbname=$dbname";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
*/

class Connection{

    private $servername = DB_HOST;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $dbname = DB_NAME;

    private $connected = false;
    private $link;
    private $error;

    public function __construct(){
        $this->connect();
    }

    public function connect(){
        /** @var $sConn string needed to the PDO*/
        $sConn = 'mysql:host=' . $this->servername . ';dbname=' . $this->dbname;

        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );

        try{
            $this->link = new PDO($sConn, $this->username, $this->password, $options);
            //$this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connected = true;
            //echo "connected to db";
        }
        catch(PDOException $e) {
            $this->error = $e->getMessage();
            echo "not connected to db" . $e;
        }
    }

    public function isConnected(){
        return $this->connected;
    }

    public function prepare($query){
        return $this->link->prepare($query);
    }

    public function query($query){
        return $this->link->query($query);
    }
}
