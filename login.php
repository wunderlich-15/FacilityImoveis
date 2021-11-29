<?php require "Pages/header.php";?>
<body>
    <?php if(isset($_SESSION["message"])){
    ?>
        <div class="notification is-danger" role="alert">
            <?php echo$_SESSION["message"]; ?>
        </div>
    <?php session_unset();
          session_destroy();
    }
    ?>
<title>Login</title>
<style>
body{
    background-image:url(Images/img1.png);
    background-repeat:no-repeat;
}
</style>
<div class="row my-4">
    <div class="col-4 my-4">
    </div>
        <div class="col-4 my-4" style="background-color:white; opacity:0.95; border: 2px solid #00bfa2; border-radius:20px;">
            <div class="row ">
                <div class="col-1"></div>
                <div class="col-2 my-2">
                        <img src="Images/Logo/Logo Facility.svg"  style="width:300px; height:150px;">
                </div>
            </div>
                <form action="Scripts/PHP/login.php" method="POST">
                <div class="col my-2">
                <label>Email: <input type="text" class="form-control" placeholder="" size="90" name="email"><br></label>
                </div>
                <div class="col my-2">
                <label>Senha: <input type="password" class="form-control" placeholder="" size="30" name="senha"><br></label>
                </div>
                
                <div class="row my-2">
                <p>Sou:</p>
                    <div class="col-4">
                    <input class="form-check-input" type="radio" name="tipo" value="corretor" id="flexRadioDefault1"> Corretor</input>
                    </div>
                    <div class="col-3">
                    <input class="form-check-input" type="radio" name="tipo" value="cliente" id="flexRadioDefault1"> Cliente</input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7"><p><button type="submit" class="btn btn-success" name="submit" value="entrar">Entrar</button></p></p></div>
                    <div class="col-5"><a href="cadastrocliente.php" style="color:#00bfa2;">CADASTRE-SE AQUI!</a></div>
                </div>
        </div>
    </div>
</div>
</body>
</html>