<?php

    class DB
    {
        private $db;

        public function __construct()
        {
            $host = "localhost";
            $db = "db_dyelog";
            $user = "root";
            $pass = "";
            $charset = "utf8";
            $this->db = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";charset=" . $charset, $user, $pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function query($sql, $params = [])
        {
            $stmt = $this->db->prepare($sql);

            if(!empty($params))
            {
                foreach ($params as $key => $value)
                {
                    $stmt->bindValue(":$key", $value);
                }
            }

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>