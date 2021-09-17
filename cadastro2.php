<?php
session_start();
include("Scripts/PHP/connect.php");

$nome = $_POST['nome'];
$creci = $_POST['creci'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
if(isset($_FILES['arquivo'])){

   $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
   $novo_nome = md5(time()). $extensao;
   $diretorio = "Images/upload/profile/corretor/"; 

   move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

}
$sql = "INSERT INTO corretor (nome_corretor, creci_corretor, telefone_corretor, email_corretor, senha_corretor, foto_corretor) VALUES ('$nome', '$creci', '$telefone', '$email', '$senha', '$novo_nome')";

if($conexao->query($sql) === TRUE){
   $_SESSION['statu_cadastro'] = true;
}

$conexao->db = null;

header('Location: login.php');
exit();
?>