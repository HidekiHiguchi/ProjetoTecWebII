<?php 
	$erro_connect = 'erro ao conectar';
	mysql_connect('localhost','root','') or die($erro_connect);
	mysql_select_db(lr) or die($erro_connect);

?>