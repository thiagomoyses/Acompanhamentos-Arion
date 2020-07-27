<?php include("conexao.php"); ?>

<?php

	$excchamado = $_POST['cxtexcluir'];

	$delete = $mysqli->query("DELETE FROM tbl_acompanhamentos WHERE acomp_chamado = '$excchamado'");

	if($delete){
		echo "<script>alert('Chamado excluido com sucesso!'); location.href='cadastro.php'</script>";
	}else{
		echo $mysqli->error;
	}
?>