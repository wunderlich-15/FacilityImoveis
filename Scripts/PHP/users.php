<?php
    session_start();
    include_once "connect.php";
    $sql = mysqli_query($conexao, "SELECT * FROM users");
    $output = "";
    if(mysqli_num_rows($sql) == 1){
        $output .="Sem rapaziada pra conversa";
    }elseif(mysqli_num_rows($sql) > 0){
        include_once "data.php";
    }
    echo $output;
?>