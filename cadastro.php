<?php
session_start();
include("Scripts/PHP/connect.php");

$nome = $_POST['nome'];
$snome = $_POST['snome'];
$RG = $_POST['RG'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
if(isset($_FILES['arquivo'])){

      $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
      $novo_nome = md5(time()). $extensao;
      $diretorio = "Images/upload/profile/cliente/"; 

   move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

}
$sql = "INSERT INTO cliente (nome_cliente, snome_cliente, telefone_cliente, email_cliente, senha_cliente, foto_cliente) VALUES ('$nome', '$snome', '$telefone', '$email', '$senha', '$novo_nome')";

if($conexao->query($sql) === TRUE){
   $_SESSION['statu_cadastro'] = true;
}

$conexao->db = null;

header('Location: login.php');
exit();

?>