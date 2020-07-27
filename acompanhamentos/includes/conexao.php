<?php
	/*variaveis de conexao*/
	$servidor = "127.0.0.1";
	$user = "root";
	$pass = "";
	$db = "acompanhamentos_db";
	global $mysqli;
	/*#########################*/


	$mysqli = new mysqli($servidor, $user, $pass, $db);

	/*testando conexao*/

	if($mysqli -> connect_error){

		echo "ERRO AO TENTAR SE CONECTAR AO BANCO";
		exit();
	}

?>