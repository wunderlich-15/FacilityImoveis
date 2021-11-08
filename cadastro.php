<?php
session_start();
include("Scripts/PHP/connect.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$ocupacao="Cliente";
if(isset($_FILES['arquivo'])){

      $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
      $novo_nome = md5(time()). $extensao;
      $diretorio = "Images/upload/profile/cliente/"; 

   move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
   $image="Images/upload/profile/cliente/$novo_nome";

}
$random_id = rand(time(), 100000);
$sql = "INSERT INTO cliente (id_cliente, nome_cliente, telefone_cliente, email_cliente, senha_cliente, foto_cliente) VALUES ('$random_id', '$nome', '$telefone', '$email', '$senha', '$novo_nome')";
$sql2 = "INSERT INTO users (id_user, nome_user, foto_user, ocupacao_user) VALUES ('$random_id', '$nome', '$image', '$ocupacao')";

if($conexao->query($sql2) === TRUE){
   $_SESSION['status_cadastro'] = true;
}
if($conexao->query($sql) === TRUE){
   $_SESSION['statu_cadastro'] = true;
}

$conexao->db = null;

header('Location: login.php');
exit();

?>