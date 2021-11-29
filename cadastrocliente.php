<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php
require "Pages/header.php"
?>
</head>

<style>
    body{
        background-image:url(Images/img1.png);
        background-repeat:no-repeat;
    }
</style>
<body>
<center><h1>CADASTRE-SE</h1></center>
<div class="container my-2" >
    <div class="row">
        <div class="col-8" style="background-color:#fff; border:2px solid #00bfa2; opacity:0.95; border-radius:20px;">
            <form action="cadastro.php" method="POST" enctype="multipart/form-data">
            <div class="my-2">
                <div class="col-8 my-2">
                    <label>
                    <p>Nome:<input type="text" class="form-control" placeholder="" size="90" name="nome"></label>
                </div>
                <div class="col-6">
                    <label>
                    <p>Telefone:<input type="text" class="form-control" placeholder="" size="90" name="telefone"></label>
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
                    <div class="d-flex align-items-center">
                    <div class="col-4">
                        <p><button type="submit"  value="Cadastrar" class="btn btn-success">Cadastrar</button></p>
                        <input type="hidden" name="update" value="">
                    </div>
                    <div class="col-3"></div>
                    <div class="col-5 align-items-center"><a href="cadastrocorretor.php" style="color:#00bfa2;">CORRETOR CADASTRE-SE AQUI!</a></div>
                    </div>
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