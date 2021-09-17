<?php
include "connect.php";

$id_per = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
echo "$id_anun";
$sql="DELETE FROM cliente WHERE id_cliente='{$id_per}'";
    
if($conexao->query($sql) === TRUE){
    header("location:  ../../index.php");
    session_destroy();
    session_unset();
    exit;
}
        
$conexao->db = null;
?>