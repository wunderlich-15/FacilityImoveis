<?php //require "Pages/header.php";?>
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
<center><p>CADASTRO</center>
<div class="notification is-danger">
    <p>ERRO:USUARIO OU SENHA INVALIDOS</p>
</div>
<form action="Scripts/PHP/logincliente.php" method="POST">
<p>Email:<input type="text" name="email" size="35"><br>
<p>Senha:<input type="password" name="senha" size="35"><br>
<p><input type="submit" name="submit" value="entrar"></p>
 


</body>
</html>