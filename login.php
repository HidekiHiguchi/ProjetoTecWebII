<?php
	include 'nucleo/init.php';
	
	if(user_exists('hideki') ===  true){   // not working
		
	echo 'existe';	
	
	}
	die();
	
	
	if(empty($_POST) === false)	{
		
		$username = $_POST['usuario'];
		$password = $_POST['senha'];
		
		if(empty($username) == true || empty($password) == true ){
		
		$errors[] = 'Você precisa Digitar o usuario e a senha';
					
			
		} 
		else if(user_exists($username) === false) {
			
			$errors[] = 'não foi possivel encontrar o usuario';
			
		}
		
	}

?>
