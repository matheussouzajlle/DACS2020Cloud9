<?php
    include 'dbconnect.php';
    $id        = $_POST['txtId'];
    $nome      = $_POST['txtNome'];
    $horaentrada   = $_POST['txtHorario'];
    $servico   = $_POST['txtServico'];
    $numerocel   = $_POST['txtNumero'];
    /*
    var_dump($id);
    var_dump($nome);
    var_dump($horaentrada);
    var_dump($servico);
    var_dump($numerocel);*/
    
    //$con = mysqli_connect("localhost","bob","bob","univille");
    if($id == "0"){
        $insert = "insert into petshoop(nome, horaentrada, servico, numerocel) values(?, ?, ?, ?);";
        $stmt = mysqli_prepare($con, $insert);
        mysqli_stmt_bind_param($stmt, "ssss", $nome, $horaentrada, $servico, $numerocel);
        mysqli_stmt_execute($stmt);
    }else{
        $update = "update petshoop set nome=?, horaentrada=?, servico=?, numerocel=?  where codigo=?";
        $stmt = mysqli_prepare($con, $update);
        mysqli_stmt_bind_param($stmt, "sssss", $nome, $horaentrada, $servico, $numerocel, $id);
        mysqli_stmt_execute($stmt);
    }
    
    header('Location: '. 'index.php');
?>