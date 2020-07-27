<?php include("includes/conexao.php");?>

<!DOCTYPE html>

<html lang="pt">
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="" ent="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Valido -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <title>Pagina de Administração de Acompanhamentos</title>
  </head>
	
	<body>
		<!-- logo -->
	<div class="form-row">
	        <div class="rodape">
	          <br/><a href="index.php"><img style="width: 180px" src="assets/images/logo.png"></a>
	        </div>
      </div>
     <!-- #########->
		<div class="container">
			<!-- Formulario de Cadastro de Novos Acompanhamentos -->
			<form action="includes/controle_cadastro.php" method="POST">
			  <div class="form-row">
			    <!-- Numero do Chamado -->
			    <div class="col-md-4 mb-3">
			      <label for="Chamado">Chamado:</label>
			      <input type="text" name="cxtchamado" class="form-control" id="validationDefault01" placeholder="Numero do Chamado" maxlength="6" required>
			    </div>
			    <!-- DATA (colocar um calendario que aparece do nada-->
			    <div class="col-md-4 mb-3">
			      <label for="Data">Data:</label>
			      <input type="date" name="cxtdata" class="form-control" id="validationDefault02" placeholder="Digite a Data" maxlength="10" required>

			    </div>
			    <!-- ####################################################-->
			    <!-- Horas (Fazer um Drop down de horas tambem ) --->
			    <div class="col-md-4 mb-3">
			      <label for="Horas">Horas:</label>
			      <input type="time" name="cxthora" class="form-control" id="validationDefault02" placeholder="Digite a Hora" maxlength="5" required>
			    </div>
			    <!-- ####################################################-->
			  </div>
			  <!-- Linha 2 -->
			  <div class="form-row">
			    <!-- Técnico -->
			    <div class="col-md-4 mb-3">
			      <label for="Tecnico">Técnico:</label>
			      <input type="text" name="cxttecnico" class="form-control" id="validationDefault03" placeholder="Digite o nome do Técnico" required>
			    </div>
			    <!-- Cliente -->
			    <div class="col-md-4 mb-3">
			      <label for="Cliente">Cliente:</label>
			      <input type="text" name="cxtcliente"  class="form-control" id="validationDefault04" placeholder="Informe o Cliente" required>
			    </div>

			    <div class="col-md-4 mb-3">
			      <label for="Ecm">ECM:</label>
			      <input type="text" name="cxtecm" class="form-control" id="validationDefault05" placeholder="Digite o Numero do ECM" maxlength="6">
			    </div>
			  </div>
			  <!-- linha 3 -->
			  <div class="form-row">
			  	<!-- Local -->
			  	<div class="col-md-10">
			  	  <label for="Local">Local:</label>
			      <input type="text" name="cxtlocal"  class="form-control" id="validationDefault04" placeholder="Informe a localização" required>
			  	</div>
			  	<!-- Status -->
			  	<div class="col-md-2">
			  	  <label for="Status">Status</label>
			      <select id="inputState" name="cxtstatus" class="form-control">
			        <option selected>Agendado</option>
			        <option>Em Andamento</option>
			        <option>Reagendado</option>
			      </select>
			  	</div>
			  </div>
			  <!-- Botão Enviar -->
			  <br/><button class="btn btn-primary"  type="submit">ENVIAR</button>
			</form>

		</div>


		<!-- Javascript do bootstrap-->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

</html>