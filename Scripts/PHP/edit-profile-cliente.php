<?php
include "connect.php";
$id_per = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
//inicio informaçãoes do anuncio
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    if(isset($_FILES['arquivo'])){

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()). $extensao;
        $diretorio = "../../Images/upload/profile/cliente/"; 
  
     move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
  
    }
    $image="Images/upload/profile/corretor/$novo_nome";
    $sql2 = "UPDATE cliente SET nome_cliente='$nome', telefone_cliente='$telefone', email_cliente='$email', senha_cliente='$senha', foto_cliente='$novo_nome' WHERE id_cliente = '{$id_per}'";
    $sql3 = "UPDATE users SET nome_user='$nome', foto_user='$image'  WHERE id_user = '{$id_per}'";

    if(($conexao->query($sql2) === TRUE) && ($conexao->query($sql3) === TRUE)){
        header("location:../../painel.php");
        $_SESSION['status_edit'] == true;
    }
        
    $conexao->db = null;
?>