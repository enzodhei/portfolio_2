<?php

class Database
{
    private $dbh;

    public function connection()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=enzo', 'enzo', 'plop');
    }

    public function selectALL($table){
        $this->connection();
        $sql = "SELECT * FROM " . $table . " LIMIT 1000";
        $sth = $this->dbh->query($sql);
        return $sth->fetchAll();
    }

    public function find($table, $id)
    {
        $this->connection();
        $sql = "SELECT * FROM " . $table . " WHERE id=" . $id;
        $sth = $this->dbh->query($sql);
        return $sth->fetch();
    }
}
?>