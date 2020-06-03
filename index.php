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
            <a class="nav-link" href="#">Inicio
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

  <!-- Page Content -->
  <div class="container">
  <?php
     include 'dbconnect.php';
     // $con = mysqli_connect("localhost","bob","bob","univille");
      $sql = "select * from petshoop";
      $result = mysqli_query($con,$sql);

    
  ?>
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <p class="lead">
        <legend align="center"><h3><center>Sistema CRUD Pet Shop</center></h3>
        <p>
           <br>
           <legend align="center"><h5><center>! ATENÇÃO !</center></h5>
            <center>Avisar os clientes para que venham de mascara devido o COVID-19</center>
        </p>
        <p>
            - Marcar banho somente entre o horario das 09:00 as 16:30.
            <br>
            - Não marcar mais de 2 serviços no mesmo dia.
            <br>
            - Agendamentos de Ortopedia, somente na Segunda, Quarta e Sexta.
            <br>
            - Agendamento de Endoscopia somente na unidade Centro.
            <br>
            - Formas de pagamento: Dinheiro, Debito e Credito em até 6x sem juros.
        </p>
        <h3><a href="formcliente.php" class="btn btn-outline-success">Marcar Horário</a></h3>
        <legend><h3>Horários Marcados</h3></legend>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Nome</th>
              <th scope="col">Horário</th>
              <th scope="col">Serviço</th>
              <th scope="col">Telefone</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            while($row = $result -> fetch_row()){
            ?>
            <tr>
              <td scope="col"><?=$row[0]?></td>
              <td><?=$row[1]?></td>
              <td><?=$row[2]?></td>
              <td><?=$row[3]?></td>
              <td><?=$row[4]?></td>
              <td><a href="formcliente.php?id=<?=$row[0]?>" class= "btn btn-outline-warning">Alterar</a>
                  <a href="confirmaremove.php?id=<?=$row[0]?>" class= "btn btn-outline-danger">Deletar</a>
                  
              </td>
           </tr>
           <?php 
           }
           ?>
          </tbody> 
        </table>
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
