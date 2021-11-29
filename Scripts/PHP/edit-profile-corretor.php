<?php
include "connect.php";
$id_per = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
//inicio informaçãoes do anuncio
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $creci = $_POST['creci'];
    $senha = md5($_POST['senha']);
    if(isset($_FILES['arquivo'])){

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()). $extensao;
        $diretorio = "../../Images/upload/profile/corretor/"; 
  
     move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
  
  }
  $image="Images/upload/profile/corretor/$novo_nome";
    $sql2 = "UPDATE corretor SET nome_corretor='$nome', telefone_corretor='$telefone', email_corretor='$email', creci_corretor='$creci', senha_corretor='$senha', foto_corretor='$novo_nome' WHERE id_corretor = '{$id_per}'";
    $sql3 = "UPDATE users SET nome_user='$nome', foto_user='$image'  WHERE id_user = '{$id_per}'";

    if(($conexao->query($sql2) === TRUE) && ($conexao->query($sql3) === TRUE)){
        header("location:../../painel.php");
        $_SESSION['status_edit'] == true;
    }
        
    $conexao->db = null;
?>