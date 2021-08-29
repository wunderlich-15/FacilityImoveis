<?php
include "connect.php";
$id_anun = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
//inicio informaçãoes do anuncio
    $titulo = $_POST['titulo'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];

    $sql2 = "UPDATE anuncio SET titulo_anuncio='$titulo', endereco_anuncio='$endereco', cidade_anuncio='$cidade', tipo_anuncio='$tipo', valor_anuncio='$valor', descricao_anuncio='$descricao' WHERE id_anuncio = '{$id_anun}'";

    if($conexao->query($sql2) === TRUE){
        header("location:../../meusanuncios.php");
        $_SESSION['status_anuncio'] == true;
    }
        
    $conexao->db = null;
?>