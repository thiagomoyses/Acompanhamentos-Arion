<?php include("conexao.php");?>


<?php 

	$chamado = $_POST['cxtchamado'];
	//testando se é um valor valido
	if(!is_numeric($chamado)) {
		echo "<script>alert('Por favor, digite apenas Numeros!'); location.href='../exclusao.php'</script>";
	}
	//se for valido, faça:
	else{
		//Buscando o chamado dentro do banco
		$get = $mysqli->query("SELECT * FROM tbl_acompanhamentos WHERE acomp_chamado = '$chamado'");
		//se o numero de linhas que retornou $get for 0 então faça:
		if (mysqli_num_rows($get)==0) {
			echo "<script>alert('Chamado não Encontrado!'); location.href='../exclusao.php'</script>";
		}
		//se não, execute o comando abaixo:
		else{
			//deletando o chamado em questão, contido na variavel $chamado
			$exclue = $mysqli->query("DELETE FROM tbl_acompanhamentos WHERE acomp_chamado = '$chamado'");
			//caso de tudo certo, retorne a seguinte mensagem:
			if ($exclue) {
				echo "<script>alert('Chamado Excluido!'); location.href='../exclusao.php'</script>";
			}
			//se não, retorne o erro:
			else{
				$mysqli->error;
			}
		}
	}
?>

<?php
//Tentar enviar o id através de um value no botão
/*

	$id = $_POST['cxtid'];

	echo $id;
*/	
?>