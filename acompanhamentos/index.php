<!DOCTYPE html>
<html lang="pt">
  <!-- Importando Conexão ---->
    <?php include("includes/conexao.php");?>

  <!-- ################## ---->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="" ent="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Valido -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <title>Acompanhamento Técnico</title>
  </head>
  <body>
    
      <!-- logo acompanhamentos -->
      <div>
        <img class="imagem" src="assets/images/TopBar.png" />
      </div>
      <!-- #################### -->
     
      <!-- Botoes de menu -->
        <table>
        <tr>
          <th><a href="adm.php"><button type="button" class="btn btn-success">NOVO</button></a></th>
          <th><a href="edit_chamado.php"><button type="button" class="btn btn-success">EDITAR</button></a></th>
          <th><a href="exclusao.php"><button type="button" class="btn btn-success">EXCLUIR</button></a></th>
        </tr>
      
      <!-- #################### -->
    <!-- Construindo Table -->    
         <?php
          //refresh na index
          echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=index.php'>";
         //Armazenando a consulta do BD na variavel $select
         $select = $mysqli->query("SELECT * FROM tbl_acompanhamentos");
         //Apresentando a tela
        echo "
                  <tr>
                    <th>CHAMADO</th>
                    <th>DATA</th>
                    <th>HORÁRIO</th>
                    <th>TÉCNICO</th>
                    <th>CLIENTE</th>
                    <th>LOCAL</th>
                    <th>ECM</th>
                    <th>STATUS</th>
                  </tr>";
         while($row = mysqli_fetch_array($select)){
            echo "<tr>";
              echo "<td>" . $row['acomp_chamado'] . "</td>";
              echo "<td>" . $row['acomp_data'] . "</td>";
              echo "<td>" . $row['acomp_horario'] . "</td>";
              echo "<td>" . $row['acomp_tecnico'] . "</td>";
              echo "<td>" . $row['acomp_cliente'] . "</td>";
              echo "<td>" . $row['acomp_local'] . "</td>";
              echo "<td>" . $row['acomp_ecm'] . "</td>";
              echo "<td>" . $row['acomp_status'] . "</td>";
          echo "</tr>";
          echo "</br>";
        }
        echo "</table>";
         ?>
      <!--#################### -->
    
    <!-- rodape -->
      <div class="form-row">
        <div class="rodape">
          <br/><img style="width: 180px" src="assets/images/logo.png">
        </div>
      </div>
      <!--#################### -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>