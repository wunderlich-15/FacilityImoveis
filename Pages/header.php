<?php session_start();
include "Scripts/PHP/connect.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/main.css">

    <!--provisorio esse caminho-->
    <link rel="stylesheet" href="C:\Users\guilh\Downloads\fontawesome-free-5.15.2-web\fontawesome-free-5.15.2-web\css\all.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <!--<link rel="stylesheet" href="CSS/bulma/css/bulma.css">-->
    <script src="Scripts/JS/bootstrap.min.js"></script>
    <!--provisorio esse caminho-->

</head>
<body>
    <nav>
        <div class="menu-icon"><span class="fas fa-bars"></span></div>
        <div class="logo"><img src="Images/Logo/Logo Facility 2.png" width="150px" height="110px"></div>
        <div class="nav-itens">
            <li><a href="#">Home</a></li>
            <li><a href="#">Aluguel</a></li>
            <li><a href="#">Venda</a></li>
            <li><a href="cadastrocliente.php">Cadastre-se</a></li>
        </div>

    <?php if ($_SESSION['status_login'] === true):
        $id = $_SESSION["id_cliente"];
        $sql="SELECT nome_cliente FROM cliente where id_cliente ='{$id}'";
        $run_sql=mysqli_query($conexao, $sql);
        if(mysqli_num_rows($run_sql) > 0){

        }
        ?>
        <div class="iten-login">
            <li><a href="painel.php"><?php while($row=mysqli_fetch_assoc($run_sql)){ echo $row["nome_cliente"];}?><div class="User-icon"><span class="fas fa-user-alt"></span></div></a></li>
        <div>
    <?php else: ?>
        <!--<div class="iten-login">
            <li><a href="telalogin.php">login<div class="User-icon"><span class="fas fa-user-alt"></span></div></a></li>
        </div>-->
        <div class="search-icon"><span class="fas fa-search"></span></div>
        <div class="cancel-icon"><span class="fas fa-times"></span></div>
        <form action="#">
            <input type="Search" class="search-data" placeholder="Pesquisa" required>
            <button type="submit" class="fas fa-search"></button>
        </form>
    </nav>