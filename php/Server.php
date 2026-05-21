<?php
session_start();

class Database {
    public function __construct($iniFileName) {
        $this->dbSettings = parse_ini_file($iniFileName);
        $this->host = $this->dbSettings["HOST"];
        $this->db = $this->dbSettings["DB"];
        $this->user = $this->dbSettings["USER"];
        $this->password = $this->dbSettings["PASSWD"];
        $this->charset = $this->dbSettings["CHARSET"];
    }

    public function connect() {
        return new PDO(
            "mysql:host=$this->host;dbname=$this->db;charset=$this->charset;",
            $this->user,
            $this->password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    }
}

$db = new Database('Server.ini');
$pdo = $db->connect();

if(isset($_SESSION['USER'])) {
    $USER = $_SESSION['USER'];
} else {
    $USER = NULL;
}
?>