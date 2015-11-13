<?php

require_once '../includes/constants.php';

class Mysql{
	private $conn;
	function __construct(){

		$this->conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME) or 
		die('There was a problem connecting to database.');
	}
	
	function verify_Username_and_Pass($un,$pwd){
		$conn = new mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME) or 
		die('There was a problem connecting to database.');

		$query = "SELECT *
				FROM users
				WHERE username = ? AND password = ?
				LIMIT 1";

		if($stnt = $this->conn->prepare($query)){
			$stnt->bind_param('ss',$un,$pwd);
			$stnt->execute();

			if($stnt->fetch()){
				$stnt->close();
				return true;
			} else return "Please enter a correct username and password";
		}
	}	
}