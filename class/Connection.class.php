<?php
class Connection {
    static private $instance = NULL;
    public $Link = NULL;
    public $resultSet = NULL;

    private function __construct() {
        $this->Link = @mysql_pconnect("localhost", "root", "root");
//        $this->Link = @mysql_pconnect("localhost", "root", "w3bm0v1t3cn1c4");
        if (!$this->Link)
            throw new Exception("Could not connect to server: " . $this->error());
        if (!mysql_select_db("movitecnica", $this->Link))
            throw new Exception("Could not connect to database: " . $this->error());
        $this->query("SET NAMES utf8");
    }

    static public function getInstance() {
        if (self::$instance == NULL) self::$instance = new Connection();
        return self::$instance;
    }

    public function error() {
        return mysql_error();
    }

    public function scape($string) {
        return mysql_real_escape_string($string);
    }

    public function query($query, $save = true) {
        $resultSet = mysql_query($query, $this->Link) or die("Invalid Query: " . $this->error());
        if ($save) $this->resultSet = $resultSet;
        return $resultSet;
    }

    public function insert_id() {
        return mysql_insert_id($this->Link);
    }

    public function fetch($resultSet = "") {
        if (empty($resultSet)) $resultSet = $this->resultSet;
        return mysql_fetch_array($resultSet);
    }

    public function result($field) {
        if ($this->numrows()) return mysql_result($this->resultSet, 0, $field);
    }

    public function numrows() {
        return mysql_num_rows($this->resultSet);
    }

    public function getField($query) {
        $resultSet = $this->query($query, false);
        return ($row = $this->fetch($resultSet)) ? $row[0] : '';
    }

    public function __destruct() {
        mysql_close($this->Link);
    }
}