<?php
    class User{

        // Connection
        private $conn;

        // Table
        private $db_table = "users";

        // Columns
        public $username;
        public $email;
        public $password;
        public $ph_number;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getUsers(){
            $sqlQuery = "SELECT * FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        //register
        public function registerUsers(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                    username = :username, 
                    email = :email, 
                    password = :password, 
                    ph_number = :ph_number";

            $stmt = $this->conn->prepare($sqlQuery);
            // sanitize
            $this->name=htmlspecialchars(strip_tags($this->username));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->age=htmlspecialchars(strip_tags($this->password));
            $this->designation=htmlspecialchars(strip_tags($this->ph_number));
        
            // bind data
            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":password", $this->password);
            $stmt->bindParam(":ph_number", $this->ph_number);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
    }
