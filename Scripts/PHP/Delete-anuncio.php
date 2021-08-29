<?php
include "connect.php";
$id_anun = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
echo "$id_anun";
$sql="DELETE FROM anuncio WHERE id_anuncio='{$id_anun}'";
    
if($conexao->query($sql) === TRUE){
    header("location:  ../../meusanuncios.php");
    exit;
}
        
$conexao->db = null;
?>