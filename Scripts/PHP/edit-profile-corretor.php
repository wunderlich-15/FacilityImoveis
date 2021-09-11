<?php
include "connect.php";
$id_per = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
//inicio informaçãoes do anuncio
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $creci = $_POST['creci'];
    $senha = md5($_POST['senha']);

    $sql2 = "UPDATE corretor SET nome_corretor='$nome', telefone_corretor='$telefone', email_corretor='$email', creci_corretor='$creci', senha_corretor='$senha' WHERE id_corretor = '{$id_per}'";

    if($conexao->query($sql2) === TRUE){
        header("location:../../painel.php");
        $_SESSION['status_edit'] == true;
    }
        
    $conexao->db = null;
?>