<?php
include "connect.php";

$id_per = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$sql="DELETE FROM corretor WHERE id_corretor='{$id_per}'";
    
if($conexao->query($sql) === TRUE){
    $_SESSION['status_login'] == false;
    header("location:  ../../login.php");
    session_destroy();
    session_unset();
    header("Refresh:2");
    exit;
}
$conexao->db = null;
?>