<?php 
while($row = mysqli_fetch_assoc($sql)){
    $output .='<a href="chat-area.php?id_user='.$row['id_user'].'" style="text-decoration:none;">
                    <div class="card">
                        <div class="conteudo">
                            <div class="row">
                                <div class="col-3">
                                    <img src="'.$row['foto_user'].'" class="rounded-circle"  style="width:75px; height:75px; border: 1px solid #d8d8d8;">
                                </div>

                                <div class="col-6 my-2">
                                    <h5>'.$row['nome_user'].'</h5>
                                    <h5 style="font-size:15px; color:#00bfa2;">'. $row['ocupacao_user'] .'</h5>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </a>';
}
?>