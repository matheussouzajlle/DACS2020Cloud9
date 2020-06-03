<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pet Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a href="index.php?id=<?=$row[0]?>"class="navbar-brand" href="#">Clientes Pet Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="index.php?id=<?=$row[0]?>"class="nav-link" href="#">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="servicos.php?id=<?=$row[0]?>"class="nav-link" href="#">Serviços</a>
          </li>
          <li class="nav-item">
            <a href="contato.php?id=<?=$row[0]?>"class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <?php
    $id=$_GET['id'];
  ?>
  
  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <legend align="center"><h3>Deseja confirmar exclusão do horário ?</h3></legend>
          <legend align="center">
              <a href="removecliente.php?id=<?=$id?>" class="btn btn-outline-success">SIM</a>
              <a href="index.php" class="btn btn-outline-danger">NÃO</a>
          </legend>

        </p>
      </p>
    </header>

   

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Todos os direitos reservados 2020 | Desenvolvido por Matheus de Souza</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
