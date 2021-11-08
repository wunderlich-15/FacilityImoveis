<?php
    include_once "connect.php";
    $searchterm = mysqli_real_escape_string($conexao, $_POST['searchTerm']);
    $output ="";
    
    $sql=mysqli_query($conexao, "SELECT * FROM users WHERE nome_user LIKE '%{$searchterm}%'");
    if(mysqli_num_rows($sql)>0){
        include_once "data.php";
    }else{
        $output .="nenhum usuario encontrado com esse termo";
    }
    echo $output;
?>