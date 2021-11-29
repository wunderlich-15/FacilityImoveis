<?php
require "Pages/header.php";
?>
<title>Meus anuncios</title>
<body>
    <div class="container-fluid">
        <?php
            $id_corretor=$_SESSION['id_corretor'];
            $query_anuncio = "SELECT * FROM anuncio WHERE id_vendedor = '{$id_corretor}' ORDER BY id_anuncio DESC";
            $result_anuncio=mysqli_query($conexao, $query_anuncio); 
            if(mysqli_num_rows($result_anuncio) > 0){
            }
            $sql = "SELECT * FROM corretor WHERE id_corretor ='$id_corretor'";

            $run_sql=mysqli_query($conexao, $sql);
            if(mysqli_num_rows($run_sql) > 0){
            }
            while($row=mysqli_fetch_assoc($run_sql)){
        ?>
            <div class="row my-2">
                <div class="col-2">
                        <img src="Images/upload/profile/corretor/<?php echo $row["foto_corretor"]?>" class="rounded-circle"  style="width:150px; height:150px;">
                        <?php } ?>
                </div>
                <div class="col d-flex align-items-center">
                    <div class="container-fluid">
                        <ul class="nav nav-tabs justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" style="color:black;" aria-current="page" href="painel.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"  style="background-color:#00BFA2; color:white;"  style="color:black;" href="meusanuncios.php">Meus Anúncios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:black;" href="anunciar.php">Anunciar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="color:black;" href="chat.php">Chat</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color:black;"data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Opções</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="edit-profile-form-corretor.php?id=<?php echo"$id_corretor"?>">Editar Perfil</a></li>
                                    <li><a class="dropdown-item" href="Scripts/PHP/delete-profile-corretor.php?id=<?php echo"$id_corretor"?>">APAGAR CONTA</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="Scripts/PHP/logout.php">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="row my-4">
            <div class="col-8">
                <h1>Meus Anuncios</h1>
            </div>
            <div class="col-2">
               <p></p>
            </div>  
            <div class="col-2 d-flex align-items-end">
                <a href="anunciar.php" style="border-radius:50px; background-color:#00bfa2; border:#00bfa2;"class="btn btn-primary">Anunciar</a>
            </div>  
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                while($row_anuncio=mysqli_fetch_assoc($result_anuncio)){
                    extract($row_anuncio);
                    /*echo "$titulo_anuncio <br>";
                    echo "ID:  $id_anuncio <br>";
                    echo "preço: $valor_anuncio <br>";
                    echo "<hr>";*/
                ?>
                <div class="col text-center">
                <div class="card h-100">
                <img src="Images/upload/<?php echo"$img_anuncio"; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo "$titulo_anuncio"; ?></h5>
                <p class="card-text"><?php echo "R$ $valor_anuncio"?></p>
                <p class="card-text"><?php echo "$tipo_anuncio"?></p>
                <p class="card-text"><?php echo "$imovel_anuncio"?></p>
                <a href="view-products.php?id=<?php echo $id_anuncio?>" style="background-color:#00bfa2; border:1px solid #00bfa2;" class="btn btn-primary">Detalhes</a>
                </div>
                </div>
                </div>
                <?php    
                }
            ?>
        </div>
    </div>
    <script src="Scripts/JS/delete-confirm.js"></script>
</body>