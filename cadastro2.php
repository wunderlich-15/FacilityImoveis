<?php
session_start();
include("Scripts/PHP/connect.php");

$nome = $_POST['nome'];
$creci = $_POST['creci'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "INSERT INTO corretor (nome_corretor, creci_corretor, telefone_corretor, email_corretor, senha_corretor) VALUES ('$nome', '$creci', '$telefone', '$email', '$senha')";

if($conexao->query($sql) === TRUE){
   $_SESSION['statu_cadastro'] = true;
}

$conexao->db = null;

header('Location: login.php');
exit();
?>