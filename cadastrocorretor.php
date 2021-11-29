<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php require "Pages/header.php"?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro corretor</title>
    <link rel="stylesheet" href="CSS/main.css">

    <!--provisorio esse caminho-->
    <link rel="stylesheet" href="C:\Users\guilh\Downloads\fontawesome-free-5.15.2-web\fontawesome-free-5.15.2-web\css\all.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script src="Scripts/JS/bootstrap.min.js"></script>
    <!--provisorio esse caminho-->

</head>
<style>
    body{
        background-image:url(Images/img1.png);
        background-repeat:no-repeat;
    }
</style>
<body>
<center><h1>CADASTRO CORRETORES</h1></center>
<div class="container my-2" >
    <div class="row">
        <div class="col-8" style="background-color:#fff; border:2px solid #00bfa2; opacity:0.95; border-radius:20px;">
            <form action="cadastro2.php" method="POST" enctype="multipart/form-data">
            <div class="my-2">
                <div class="col-8 my-2">
                    <label>
                    <p>Nome:<input type="text" class="form-control" placeholder="" size="90" name="nome"></label>
                </div>
                <div class="col-6">
                    <label>
                    <p>Telefone:<input type="text" class="form-control" placeholder="" size="90" name="telefone"></label>
                </div>
                <div class="col-6">
                    <label>
                    <p>Creci:<input type="text" class="form-control" placeholder="" size="90" name="creci"></label>
                </div>
                <div class="col-7">
                    <label>
                    <p>Email:<input type="text" class="form-control" placeholder="" size="90" name="email"></label>
                </div>
                <div class="col-6">
                    <p>Senha<input type="password" class="form-control" placeholder="" size="30" name="senha"></label>
                </div>
                <div class="col-6">
                    <p>Confirme a senha:<input type="password" class="form-control" placeholder="" size="30" name="senha"></label>
                </div>
                <div class="col-8">
                    <p>Foto de perfil: <input type="file" class="form-control" id="inputGroupFile04" required name="arquivo" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>
                <div class="row">
                    <div class="col-4">
                        <p><button type="submit"  value="Cadastrar" class="btn btn-success">Cadastrar</button></p>
                        <input type="hidden" name="update" value="">
                    </div>
                    <div class="col-3"></div>
                </div>
                
            </div>
        </div>
        <div class="col-4 align-items-center" style="background-color:#000; opacity:0.90;border-radius:20px;">
        <div class="position-absolute bottom-0 start-55 translate-middle-y">
            <img src="Images/Logo/Logo Facility.svg"  style="width:400px; height:200px;">
        </div>
        </div>
    </div>

</div>


</body>
</html>