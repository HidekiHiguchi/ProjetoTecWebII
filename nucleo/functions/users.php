<?php 

	function user_exists($username) {
		
		$username = sanitize($username);		
		
		//$query = mysql_query("select COUNT (`user_id`) FROM `users` WHERE `username` = '$username' ");
		
		
		return (mysql_result(mysql_query("SELECT COUNT (`user_ID`) FROM `users` WHERE `username` = '$username'"), 0) ==1 ) ? true : false;
		
	}

?>