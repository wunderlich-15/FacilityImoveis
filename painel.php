<?php 
require "Pages/header.php"
?>
<?php 
if(isset($_SESSION['status_login']) === false){
    header("location: login.php");
}
?>
<?php //include "Scripts/PHP/connect.php";
if (isset($_SESSION["login_corretor"]) === true){
    unset($_SESSION["login_cliente"]);
    $id = $_SESSION["id_corretor"];
    $sql = "SELECT * FROM corretor WHERE id_corretor ='{$id}'";

    $run_sql=mysqli_query($conexao, $sql);
    if(mysqli_num_rows($run_sql) > 0){
    }
    while($row=mysqli_fetch_assoc($run_sql)){
        echo "SEJA BEM-VINDO CORRETOR " . $row["nome_corretor"] . " ID: " . $_SESSION["id_corretor"];
    }
}?>
<a href="anunciar.php"> Anunciar</a>
<a href="meusanuncios.php">Anuncios</a>
<?php
if(isset($_SESSION['login_cliente']) === true){
    unset($_SESSION["login_corretor"]);
    $id = $_SESSION["id_cliente"];
    $sql = "SELECT * FROM cliente WHERE id_cliente ='{$id}'";

    $run_sql=mysqli_query($conexao, $sql);
    if(mysqli_num_rows($run_sql) > 0){
    }
    while($row=mysqli_fetch_assoc($run_sql)){
        echo "SEJA BEM-VINDO " . $row["nome_cliente"];
    }
}

?>
<?php //echo $_SESSION['email_cliente']; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <a href="Scripts/PHP/logout.php"><button class="btn btn-danger">sair</button></a>
</body>
</html>