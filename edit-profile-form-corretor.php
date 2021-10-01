<?php 
require "Pages/header.php";
$id_per = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
?>
<?php
    $id_corretor=isset($_SESSION['id_corretor']);
    $query_anuncio = "SELECT * FROM corretor WHERE id_corretor ='{$id_per}'LIMIT 1";

    $run_sql=mysqli_query($conexao, $query_anuncio);
    if(mysqli_num_rows($run_sql) > 0){
    }
    while($row=mysqli_fetch_assoc($run_sql)){
        $id_corretor = $row["id_corretor"];
        $nome_corretor = $row["nome_corretor"];
        $telefone_corretor = $row["telefone_corretor"];
        $email_corretor = $row["email_corretor"];
        $creci_corretor = $row["creci_corretor"];
        $senha_corretor = $row["senha_corretor"];

    ?>
    <title>Editar: <?php echo"$nome_corretor"?></title>
    <body>
    <div class="container-fluid">
            <div class="row my-2">
                <div class="col-2">
                        <img src="Images/upload/profile/corretor/<?php echo $row["foto_corretor"]?>" class="rounded-circle"  style="width:150px; height:150px;">
                </div>
                <div class="col d-flex align-items-center">
                    <div class="container-fluid">
                        <ul class="nav nav-tabs justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link"  style="color:black;" aria-current="page" href="painel.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="color:black;" href="meusanuncios.php">Meus Anúncios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:black;" href="anunciar.php">Anunciar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled"  style="color:black;" href="meusanuncios.php">Chat</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color:black;"data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Opções</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="edit-profile-form-corretor.php?id=<?php echo"$id"?>">Editar Perfil</a></li>
                                    <li><a class="dropdown-item" href="Scripts/PHP/delete-profile-corretor.php?id=<?php echo"$id"?>">APAGAR CONTA</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="Scripts/PHP/logout.php">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
        <div class="container my-2">
                        <div class="row">
                            <div class="col-7" style="border-right:2px solid #00bfa2">
                            <h1>Edite suas informações</h1>
                                <div class="col-6 my-2">
                                    <form action="Scripts/PHP/edit-profile-corretor.php?id=<?php echo"$id_corretor"?>" method="Post" enctype="multipart/form-data">
                                    <label>Nome: <input type="text" name="nome" size="35" placeholder="<?php echo "$nome_corretor"?>"><br></label>
                                </div>
                                <div class="col-4 my-2">
                                    <label>Telefone: <input type="text" name="telefone" size="35" placeholder="<?php echo"$telefone_corretor"?>"><br></label>
                                </div>
                                <div class="col-4 my-2">
                                    <label>Email: <input type="text" name="email" size="35" placeholder="<?php echo"$email_corretor"?>"><br></label>
                                </div>
                                <div class="col-2 my-2">    
                                    <label>Creci: <input type="text" name="creci" size="35" placeholder="<?php echo"$creci_corretor"?>"><br></label>
                                </div>
                                <div class="row my-2">
                                    <div class="col-4 my-2">
                                        <label>Senha: <input type="password" name="senha" size="15"><br></label>
                                    </div>
                                    <div class="col-2 my-2">
                                        <label>Confirme sua senha: <input type="password" name="senha" size="15"><br></label>
                                    </div>
                                </div>
                                <div class="col-3 my-2">
                                    <label>Nova foto de perfil: <input type="file" required name="arquivo"></label>
                                </div> 
                                <div class="row">
                                    <div class="col-6">
                                        <p></p>
                                    </div>
                                    <div class="col"> 
                                        <button type="submit" class="btn btn-success" name="editar" value="editar">Pronto</button></p>
                                    </div>
                                        <?php } ?>
                                </div>
                                
                            </div>
                            <div class="col-5 align-items-center">
                                <center><img src="Images/Logo/Logo Facility.svg"  style="width:400px; height:200px;">
                               <span style="color:black; font-size:18; font-family:'Montserrat', sans-serif;" class="justify-content-center">Facility Imóveis, Te conectando ao seu sonho</span></center>
                            </div>
                        </div>
        </div>
</body>
