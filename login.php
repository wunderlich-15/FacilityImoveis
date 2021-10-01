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
                <div class="col-2 my-2">
                <label>Email: <input type="text" name="email" size="35"><br></label>
                </div>
                <div class="col-2 my-2">
                <label>Senha: <input type="password" name="senha" size="25"><br></label>
                </div>
                
                <div class="row my-2">
                <p>Sou:</p>
                    <div class="col-4">
                        <input type="radio" name="tipo" value="corretor"> Corretor</input>
                    </div>
                    <div class="col-3">
                        <input type="radio" name="tipo" value="cliente"> Cliente</input>
                    </div>
                </div>
                <p><button type="submit" class="btn btn-success" name="submit" value="entrar">Entrar</button></p></p>
        </div>
    </div>
</div>
</body>
</html>