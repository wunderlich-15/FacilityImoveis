<?php
session_start();
include("Scripts/PHP/connect.php");

$nome = $_POST['nome'];
$snome = $_POST['snome'];
$RG = $_POST['RG'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "INSERT INTO cliente (nome_cliente, snome_cliente, RG_cliente, telefone_cliente, email_cliente, senha_cliente) VALUES ('$nome', '$snome', '$RG', '$telefone', '$email', '$senha')";

if($conexao->query($sql) === TRUE){
   $_SESSION['statu_cadastro'] = true;
}

$conexao->db = null;

header('Location: cadastrocliente.php');
exit();
?>