<?php
    class Connect{
        protected $host = 'localhost';
        protected $dbname = 'e-com';
        protected $user = 'root';
        protected $password = '';

        public function connect_with_db(){
            $dsn = 'mysql:localhost=' . $this->host . ';dbname=' . $this->dbname;
            $pdo = new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }
    #now to connect to the database just create a class that extends from this one or using an object