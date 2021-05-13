<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>JulgFlix - Usuário</title>
  <link rel="icon" href="../assets/logo2.ico">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/style.css">

</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
      </div>
      <div id="logo" class="col-md-8">
      <a href="../index.php"><img src="../assets/logo.png"></a>
        </br>

      </div>
      <div class="col-md-2">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-inverse">


          <ul id="menu" class="nav navbar">
            <li><a href="usuario.php">Usuário</a></li>
            <li><a href="filmes.php">Filme</a></li>
            <li><a href="series.php">Séries</a></li>
            <li><a href="animes.php">Animes</a></li>
            <li><a href="desenhos.php">Desenhos</a></li>
          </ul>

        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
      <div id="resposta">
      <?php
    if (isset($_POST['Enviar'])){
        $nome=$_POST['nome'];
        $cpf=$_POST['cpf'];
        $end=$_POST['endereco'];
        $cidade=$_POST['cidade'];
        $estado=$_POST['estado'];
        echo "<p>Nome: $nome</p>";
        echo "<p>CPF: $cpf</p>";
        echo "<p>Endereço: $end</p>";
        echo "<p>Cidade: $cidade</p>";
        echo "<p>Estado: $estado</p>";    
    } 
?>
        </div>
      </div>
      <div id="conteudo" class="col-md-6">
        <form action="usuario.php" method="post">
          <div class="form-group-sm">
            <label for="form">Nome:</label>
            <input class="form-control" id="nome" type="text" name="nome">

            <label for="form">CPF:</label>
            <input id="cpf" class="form-control" type="number" name="cpf">
            
            <label for="form">Endereço:</label>
            <input class="form-control" id="endereco" type="text" name="endereco">

            <label for="form">Cidade:</label>
            <input class="form-control" id="cidade" type="text" name="cidade">

            <label for="form">Estado:</label>
            <input class="form-control" id="estado" type="text" name="estado">

            <br>
            <input class="btn btn-success" type="submit" name="Enviar" value="Enviar">
            <input class="btn btn-danger" type="reset" name="Limpar" value="Limpar">

          </div>
        </form>

      </div>
      
      <div class="col-md-3">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="footer">
        Made with ❤ by Bruna Silva
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>