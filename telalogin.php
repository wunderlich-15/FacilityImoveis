<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro cliente</title>
    <link rel="stylesheet" href="CSS/main.css">

    <!--provisorio esse caminho-->
    <link rel="stylesheet" href="C:\Users\guilh\Downloads\fontawesome-free-5.15.2-web\fontawesome-free-5.15.2-web\css\all.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/bulma/css/bulma.css">
    <script src="Scripts/JS/bootstrap.min.js"></script>
    <!--provisorio esse caminho-->

</head>
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
<form action="logincliente.php" method="POST">
<p>Email:<input type="text" name="email" size="35"><br>
<p>Senha:<input type="password" name="senha" size="35"><br>
<p><input type="submit" name="submit" value="entrar"></p>
 


</body>
</html>