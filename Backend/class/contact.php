<?php
    class Contact{

        // Connection
        private $conn;

        // Table
        private $db_table = "contact_us";

        // Columns
        public $message;
        public $user_id;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        //contact us
        public function contactUs(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                    message = :message, 
                    user_id = :user_id";

            $stmt = $this->conn->prepare($sqlQuery);
            // sanitize
            $this->name=htmlspecialchars(strip_tags($this->message));
            $this->email=htmlspecialchars(strip_tags($this->user_id));
        
            // bind data
            $stmt->bindParam(":message", $this->message);
            $stmt->bindParam(":user_id", $this->user_id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

    }
