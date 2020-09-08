<?php
    class Dbh {
        private $servername;
        private $username;
        private $password;
        private $dbname;

        protected function connect() {
            $this->servername = "localphpmyadminhost";
            $this->username = "root";
            $this->password = "";
            $this->servername = "ooptutorial";

            $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            return $conn;
        }
    }
?>