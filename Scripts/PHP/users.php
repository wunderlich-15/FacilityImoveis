<?php
    session_start();
    include_once "connect.php";

    if($_SESSION['login_cliente'] === true){
        $outgoing_id = $_SESSION["id_cliente"];
    }
    if($_SESSION['login_corretor'] === true){
        $outgoing_id = $_SESSION["id_corretor"];
    }
    $sql = mysqli_query($conexao, "SELECT * FROM users");

    $output = "";
    if(mysqli_num_rows($sql) == 1){
        $output .="Sem rapaziada pra conversa";
    }elseif(mysqli_num_rows($sql) > 0){
        include "Scripts/PHP/data.php";
    }
    echo $output;
?>