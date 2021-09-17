<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php
require "Pages/header.php"
?>
</head>
<body>
<center><p>CADASTRO</center>
<form action="cadastro.php" method="POST" enctype="multipart/form-data">
<p>Nome:<input type="text" name="nome" size="35"><br>
<p>Sobrenome:<input type="text" name="snome" size="35"><br>
<p>RG:<input type="text" name="RG" size="35"><br>
<p>Telefone:<input type="text" name="telefone" size="25"><br>
<p>Email:<input type="text" name="email" size="35"><br>
<p>Senha:<input type="password" name="senha" size="35"><br>
<p>Confirme a senha:<input type="password" name="senha" size="35"><br>
<p>Foto de perfil: <input type="file" required name="arquivo">
<p><input type="submit" value="Cadastrar"></p>
<input type="hidden" name="update" value="">
<a href=cadastrocorretor.php>corretor cadastre-se aqui</a>


</body>
</html>