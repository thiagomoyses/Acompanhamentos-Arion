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
			<form action="includes/controle_exclusao.php" method="POST">
			  <div class="form-row">
			    <!-- Numero do Chamado -->
			    <div class="col-md-4 mb-3">
			      <label for="Chamado">Chamado:</label>
			      <input type="text" name="cxtchamado" class="form-control" id="validationDefault01" placeholder="Numero do Chamado" maxlength="6" required>
			    </div>
			    <!-- ####################################################-->
			  </div>
			  <!-- Botão Enviar -->
			  <br/><button type="submit" class="btn btn-danger">Excluir</button>
			</form>

		</div>


		<!-- Javascript do bootstrap-->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

</html>