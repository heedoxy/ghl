<?php
class Database {

    protected $_DB_HOST, $_DB_NAME, $_DB_USER, $_DB_PASS, $connection;

    public function __construct()
    {

        $this->_DB_HOST = config('DB_HOST');
        $this->_DB_NAME = config('DB_DATABASE');
        $this->_DB_USER = config('DB_USERNAME');
        $this->_DB_PASS = config('DB_PASSWORD');

        try {
            $this->connection  = new PDO("mysql:host=$this->_DB_HOST;dbname=$this->_DB_NAME", $this->_DB_USER,  $this->_DB_PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->query("SET NAMES 'utf8'");
            $this->connection->query("SET CHARACTER SET 'utf8'");
            $this->connection->query("SET character_set_connection = 'utf8'");

        } catch(PDOException $e) {
            dd("Connection failed: " . $e->getMessage());
        }

    }

    public function connect()
    {
        return $this->connection;
    }

    // ----------- for check result of query
    public function result($result)
    {
        if (!$result) {
            $errorNo =$this->connection->errorCode();
            $error = $this->connection->errorInfo();
            echo "Error NO : $errorNo";
            echo "<br>";
            echo "Error Message : ";
            print_r($error);
            echo "<hr>";
            return false;
        }
        return true;
    }
    public function table_counter($table)
    {
        $result = $this->connection->prepare("SELECT * FROM `$table` ");
        if (!$this->result($result)) return false;
        $result->execute();
        return $result->rowCount();
    }

    public function table_list($table)
    {
        $result = $this->connection->prepare("SELECT * FROM `$table` ORDER BY `id` DESC");
        if (!$this->result($result)) return false;
        $result->execute();
        return $result;
    }

    public function change_status($table, $id)
    {
        $status = $this->get_data($table, $id)->status;
        $status = !$status;

        $now = now();
        $result = $this->connection->prepare("UPDATE `$table` SET 
        `status`='$status',
        `updated_at`='$now'
        WHERE `id` ='$id'");
        $result->execute();
        if (!$this->result($result)) return false;
        return $id;
    }

    public function get_data($table, $id)
    {
        $result = $this->connection->prepare("SELECT * FROM `$table` WHERE id=:id");
        if (!$this->result($result)) return false;
        $result->execute([':id'=>$id]);
        $row = $result->fetchObject();
        return $row;
    }
    public function remove_data($table, $id)
    {
        $result = $this->connection->prepare("DELETE FROM `$table` WHERE id=?");
        $result->execute([$id]);
        if (!$this->result($result)) return false;
        return true;
    }



}
