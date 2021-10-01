<?php session_start();
include "Scripts/PHP/connect.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!--Bootstrap-->

</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class ="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="Images/Logo/Logo facility.svg" width="130px" height="90px">
            </a>
            <div class="collapse navbar-collapse" id="navbar-nav">
                <ul class="navbar-nav" style="font-size:18px;">
                    <li class="nav-item">
                    <a class="nav-link" style="border-right:1px solid #00bfa2; margin-right:20px;" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" style="border-right:1px solid #00bfa2; margin-right:20px;" href="aluguel.php">Aluguel</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link"  style="border-right:1px solid #00bfa2; margin-right:20px;" href="venda.php">Venda</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" style="border-right:1px solid #00bfa2; margin-right:20px;" href="cadastrocliente.php">Cadastre-se</a>
                    </li>
                </ul>
            </div>
            


            <?php if (isset($_SESSION['status_login']) === true){?>
                <li class="nav-item" style="list-style:none; font-size:18px;">
                    <a class="nav-link" style="border-right: 1px solid #00bfa2; border-left: 1px solid #00bfa2;" href="painel.php"><i class="bi bi-person-circle"></i>Perfil</a>
                </li>
            <?php }else{ ?>
            <?php unset($_SESSION['status_login']); session_destroy();?>
                <li class="nav-item" style="list-style: none; font-size:18px;">
                    <a class="nav-link" style="border-right: 1px solid #00bfa2; border-left: 1px solid #00bfa2;" href="login.php"><i class="bi bi-person-circle"></i>Login</a>
                </li>
            <?php } ?>
        <form class="d-flex" style="margin-left:20px " action="search.php" method="GET">
            <input type="Search" class="form-control me-2" name="titulo" placeholder="Pesquisa" required>
            <button type="submit" class="btn btn-outline-success"><i class="bi bi-search"></i></button>
        </form>
    </div>
</nav>