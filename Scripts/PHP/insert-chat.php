<?php
    session_start();
    if(isset($_SESSION['status_login']) === true){
        include_once "connect.php";
        $outgoing_id = mysqli_real_escape_string($conexao, $_POST['outgoing-id']);
        $incoming_id = mysqli_real_escape_string($conexao, $_POST['incoming-id']);
        $message = mysqli_real_escape_string($conexao, $_POST['message']);

        if(!empty($message)){
            $sql = mysqli_query($conexao, "INSERT INTO messages (incoming_message_id, outgoing_message_id, mesg) 
                                VALUES  ('{$incoming_id}', '{$outgoing_id}', '{$message}')") or die();
        }
    }else{
        header("location: login.php");
    }
?>