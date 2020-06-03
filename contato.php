<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Academia</title>

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
            <a class="nav-link" href="#">Contato</a>
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
      <legend align="center"><h3>NOSSAS UNIDADES</h3>
           <a>Unidade Aventureiro: (47) 3467-4370</a>
           <a href="https://mail.google.com/mail/u/0/#inbox?id=<?=$id?>" class="btn btn-link"><legend>petaventureiro@petshop.com</legend></a>
           <br>
           <a>Unidade Iririu: (47) 3782-9843</a>
           <a href="https://mail.google.com/mail/u/0/#inbox?id=<?=$id?>" class="btn btn-link"><legend>petiririu@petshop.com</legend></a>
           <br>
           <a>Unidade Centro: (47) 3456-7545</a>
           <a href="https://mail.google.com/mail/u/0/#inbox?id=<?=$id?>" class="btn btn-link"><legend>petcentro@petshop.com</legend></a>
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
