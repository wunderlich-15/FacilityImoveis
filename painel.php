<?php 
session_start();
//require "Pages/header.php"
?>
<?php include "Scripts/PHP/connect.php";

$id = $_SESSION["id_cliente"];
$sql = "SELECT * FROM cliente WHERE id_cliente ='{$id}'";

$run_sql=mysqli_query($conexao, $sql);
if(mysqli_num_rows($run_sql) > 0){
}
while($row=mysqli_fetch_assoc($run_sql)){
    echo "SEJA BEM-VINDO " . $row["nome_cliente"];
}
?>
<?php //echo $_SESSION['email_cliente']; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">home</a>
    <a href="Scripts/PHP/logout.php"><button class="btn btn-danger">sair</button></a>
</body>
</html>