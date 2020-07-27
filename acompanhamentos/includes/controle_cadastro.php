<?php
	include("conexao.php");
?>
<?php
	
		/*VARIAEIS DE INSERÇÃO*/
		$chamado = $_POST['cxtchamado'];
		$data = $_POST['cxtdata'];
		$horas = $_POST['cxthora'];
		$tecnico = $_POST['cxttecnico'];
		$cliente = $_POST['cxtcliente'];
		$ecm = $_POST['cxtecm'];
		$local = $_POST['cxtlocal'];
		$status = $_POST['cxtstatus'];

		/*#######################################*/

		//testando de $chamado é numeroco
		if (!is_numeric($chamado)){
			echo "<script>alert('Digite apenas numeros no campo chamado!'); location.href='../adm.php'</script>";			
		}
		//testando se o campo ECM é numerico
		elseif (!is_numeric($ecm)) {
			echo "<script>alert('Digite apenas numeros no ECM !'); location.href='../adm.php'</script>";
		}
		//se todos os campos estiverem OK, faça:
		else{
			$insert = $mysqli->query("INSERT INTO tbl_acompanhamentos(acomp_chamado, acomp_data, acomp_horario, acomp_tecnico, acomp_cliente, acomp_ecm, acomp_local, acomp_status) VALUES('$chamado', '$data', '$horas', '$tecnico', '$cliente', '$ecm', '$local', '$status')");			
			/*RESPOSTA CASO ENVIADO, OU CASO OCORRA ERRO*/
			if($insert){
				echo "<script>alert('Chamado inserido com sucesso!'); location.href='../adm.php'</script>";
			}
			else{

				echo $mysqli->error;
			}
		}
?>