<?php
include "connect.php";
$id_per = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
//inicio informaçãoes do anuncio
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $snome = $_POST['snome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql2 = "UPDATE cliente SET nome_cliente='$nome', telefone_cliente='$telefone', email_cliente='$email', snome_cliente='$snome', senha_cliente='$senha' WHERE id_cliente = '{$id_per}'";

    if($conexao->query($sql2) === TRUE){
        header("location:../../painel.php");
        $_SESSION['status_edit'] == true;
    }
        
    $conexao->db = null;
?>