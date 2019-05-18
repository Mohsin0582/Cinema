<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
 
    // object properties
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $modified;
    public $created;
 
    // constructor with $db as database connection
    public function __construct($db){
       $this->conn = $db;
    }
    // create user
	function createUser(){

				// query to insert record
				$sql = "INSERT INTO users(id, first_name, last_name, email, password, modified, created)
					VALUES ('', '$this->first_name', '$this->last_name', '$this->email', '$this->password', '$this->modified', '$this->created')";
								
					if ($this->conn->query($sql)) {						
							return true;
					   }else{
						   return false;
					   }
	   }
}