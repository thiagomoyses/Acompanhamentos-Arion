<?php include('conexao.php'); ?>

<?php
	//quando estiver feliz, lembre-se: Um bug sempre poderar estragar tudo!!!

		//Recebendo variaveis a ser editadas
		$chamado = $_POST['cxtchamado'];
		$data = $_POST['cxtdata'];
		$hora = $_POST['cxthora'];
		$tecnico = $_POST['cxttecnico'];
		$cliente = $_POST['cxtcliente'];
		$ecm = $_POST['cxtecm'];
		$local = $_POST['cxtlocal'];
		$status = $_POST['cxtstatus'];

		//testando se há alteração de Data
		if ($data != "") {
			$update = $mysqli->query("UPDATE tbl_acompanhamentos SET acomp_data = '$data' WHERE acomp_chamado = '$chamado'");
		}
		//testando se há alteração na hora
		if ($hora != "") {
			$update = $mysqli->query("UPDATE tbl_acompanhamentos SET acomp_horario = '$hora' WHERE acomp_chamado = '$chamado'");
		}
		//testando se há alteração na tecnico
		if ($tecnico != "") {
			$update = $mysqli->query("UPDATE tbl_acompanhamentos SET acomp_tecnico = '$tecnico' WHERE acomp_chamado = '$chamado'");
		}
		//testando se há alteração na cliente
		if ($cliente != "") {
			$update = $mysqli->query("UPDATE tbl_acompanhamentos SET acomp_cliente = '$cliente' WHERE acomp_chamado = '$chamado'");
		}
		//testando se há alteração na ecm
		if ($ecm != "") {
			/*iiiiiiiiiii*/
			if(is_numeric($ecm)) {
			$update = $mysqli->query("UPDATE tbl_acompanhamentos SET acomp_ecm = '$ecm' WHERE acomp_chamado = '$chamado'");
			}else{
				echo "<script>alert('Por favor, digite apenas Numeros!'); location.href='../edit_chamado.php'</script>";
			}

			/*iiiiiiiiii*/
			
		}
		//testando se há alteração na local
		if ($local != "") {
			$update = $mysqli->query("UPDATE tbl_acompanhamentos SET acomp_local = '$local' WHERE acomp_chamado = '$chamado'");
		}
		//testando se há alteração na status
		if ($status != "") {
			$update = $mysqli->query("UPDATE tbl_acompanhamentos SET acomp_status = '$status' WHERE acomp_chamado = '$chamado'");
		}

		echo "<script>alert('Chamado alterado com sucesso!'); location.href='../edit_chamado.php'</script>";

?>