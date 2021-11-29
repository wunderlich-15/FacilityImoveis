<?php
session_start();
if($_SESSION['status_login'] === true){
    include_once "connect.php";
    $outgoing_id = mysqli_real_escape_string($conexao, $_POST['outgoing-id']);
    $incoming_id = mysqli_real_escape_string($conexao, $_POST['incoming-id']);
    $output = "";

    $sql="SELECT * FROM messages WHERE (outgoing_message_id = {$outgoing_id} AND incoming_message_id = {$incoming_id})
        OR (outgoing_message_id = {$incoming_id} AND incoming_message_id = {$outgoing_id}) ORDER BY id_msg";

    $query = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            if($row['outgoing_message_id'] === $outgoing_id){
                $output .='<div class="card my-2" style="padding:5px; border-radius:15px 15px 0 15px;
                        margin-left:auto; background-color:#00bfa2; color:white; max-width:300px;">
                        <p>'. $row['mesg'] .'</p>
                        </div>';
                
            }else{
                $output .='<div class="card my-2" style="padding:5px; border-radius:15px 15px 15px 0; 
                            margin-right:auto; background-color:#fff; max-width:300px">
                            <p>'. $row['mesg'] .'</p>
                        </div>';
            }
        }echo $output;
    }
}else{
    header("location: ../../login.php");
}
?>