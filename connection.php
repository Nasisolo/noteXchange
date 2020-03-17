<?php

include ('config.php');

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
        /** @var $sConn string needed to the PDO aka DSN*/
        $sConn = 'mysql:host=' . $this->servername . ';dbname=' . $this->dbname;

        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );

        try{
            //$this->link =  new PDO();
            $this->link = new PDO($sConn, $this->username, $this->password, $options);
            //$this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connected = true;
            //echo "connected to db<br>";
        }
        catch(PDOException $e) {
            $this->error = $e->getMessage();
            echo "not connected to db" . $e;
        }
    }

    public function prepare($query){
        return $this->link->prepare($query);
    }

    /*
    public function testPrepare(){
        $statement = $this->link->prepare('select * from utenti where Username = ?');
        $statement->execute(array('nasi'));

        foreach ($statement as $row){
            echo $row['IdU'] . ' ' . $row['Username'] . ' ' . $row['Password'] . '<br>';
        }
    }

    public function query($query){
        return $this->link->query($query);
    }
    */

}
