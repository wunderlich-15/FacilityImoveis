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
        ?>
        <img src="Images/upload/profile/corretor/<?php echo $row["foto_corretor"]?>" class="rounded-circle" alt="...">
        <?php echo "SEJA BEM-VINDO CORRETOR " . $row["nome_corretor"] . " ID: " . $_SESSION["id_corretor"];?>
    <?php } ?>

<a href="edit-profile-form-corretor.php?id=<?php echo"$id"?>">Editar</a>
<a href="anunciar.php"> Anunciar</a>
<a href="meusanuncios.php">Anuncios</a>
<p><a href="Scripts/PHP/delete-profile-corretor.php?id=<?php echo"$id"?>"><button class="btn btn-danger">APAGAR CONTA</button></p>
<?php } ?>
<?php
if(isset($_SESSION['login_cliente']) === true){
    unset($_SESSION["login_corretor"]);
    $id = $_SESSION["id_cliente"];
    $sql = "SELECT * FROM cliente WHERE id_cliente ='{$id}'";

    $run_sql=mysqli_query($conexao, $sql);
    if(mysqli_num_rows($run_sql) > 0){
    }
    while($row=mysqli_fetch_assoc($run_sql)){
    ?>
        <img src="Images/upload/profile/cliente/<?php echo $row["foto_cliente"]?>" class="rounded-circle" class="float-left" alt="...">
        <?php  echo "SEJA BEM-VINDO " . $row["nome_cliente"]; ?>
        <?php }?>

<a href="edit-profile-form-cliente.php?id=<?php echo"$id"?>">Editar</a>
<p><a href="Scripts/PHP/delete-profile-cliente.php?id=<?php echo"$id"?>"><button class="btn btn-danger">APAGAR CONTA</button></p>
<?php } ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <div class="container">
    <a href="Scripts/PHP/logout.php"><button class="btn btn-danger">sair</button></a>
    </div>
</body>
</html>