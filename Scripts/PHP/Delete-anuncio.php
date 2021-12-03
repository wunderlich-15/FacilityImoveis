<?php
//arquivo de conexão
include "connect.php";
$id_anun = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
echo "$id_anun";

//query de dleete de informações do banco de dados
$sql="DELETE FROM anuncio WHERE id_anuncio='{$id_anun}'";

//validação da query
if($conexao->query($sql) === TRUE){
    header("location:  ../../meusanuncios.php");
    exit;
}
        
$conexao->db = null;
?>