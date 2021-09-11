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
<body>
<center><p>CADASTRO</center>
<form action="cadastro2.php" method="POST">
<p>Nome:<input type="text" name="nome" size="35"><br>
<p>creci:<input type="text" name="creci" size="35"><br>
<p>Telefone:<input type="text" name="telefone" size="25"><br>
<p>Email:<input type="text" name="email" size="35"><br>
<p>Senha:<input type="password" name="senha" size="35"><br>
<p>Confirme a senha:<input type="password" name="senha" size="35"><br>
<p><input type="submit" value="Cadastrar"></p>
<input type="hidden" name="update" value="">


</body>
</html>