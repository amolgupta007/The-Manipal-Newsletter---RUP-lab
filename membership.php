<?php

require 'mysql.php';

class Membership {

	function validate_user($un,$pwd){
		$mysql = New Mysql();
		$ensure_credentials = $mysql->verify_Username_and_Pass($un,$pwd);
		
		if($ensure_credentials){
			$_SESSION[status] = 'authorised';
			header("location: home.html")
		}
	}
}