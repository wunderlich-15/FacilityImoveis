<?php 
require "Pages/header.php";
$id_per = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
?>
<?php
    $id_cliente=isset($_SESSION['id_cliente']);
    $query_anuncio = "SELECT * FROM cliente WHERE id_cliente ='{$id_per}'LIMIT 1";

    $run_sql=mysqli_query($conexao, $query_anuncio);
    if(mysqli_num_rows($run_sql) > 0){
    }
    while($row=mysqli_fetch_assoc($run_sql)){
        $id_cliente = $row["id_cliente"];
        $nome_cliente = $row["nome_cliente"];
        $telefone_cliente = $row["telefone_cliente"];
        $email_cliente = $row["email_cliente"];
        $senha_cliente = $row["senha_cliente"];

    ?>
    <title>Editar: <?php echo"$nome_cliente"?></title>
    <body>
    <div class="container-fluid">
    <div class="row my-2">
                <div class="col-2">
                        <img src="Images/upload/profile/cliente/<?php echo $row["foto_cliente"]?>" class="rounded-circle"  style="width:150px; height:150px;">
                </div>
                <div class="col d-flex align-items-center">
                    <div class="container-fluid">
                        <ul class="nav nav-tabs justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active"  style="background-color:#00BFA2; color:white;" aria-current="page" href="painel.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="color:black;" href="chat.php">Chat</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color:black;"data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Opções</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="edit-profile-form-cliente.php?id=<?php echo"$id"?>">Editar Perfil</a></li>
                                    <li><a class="dropdown-item" style="color:red;" href="Scripts/PHP/delete-profile-cliente.php?id=<?php echo"$id"?>">APAGAR CONTA</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="Scripts/PHP/logout.php">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="container my-2">
                        <div class="row">
                            <div class="col-7" style="border-right:2px solid #00bfa2">
                            <h1>Edite suas informações</h1>
                                <div class="col my-2">
                                    <form action="Scripts/PHP/edit-profile-cliente.php?id=<?php echo"$id_cliente"?>" method="Post" enctype="multipart/form-data">
                                    <label>Nome: <input type="text" class="form-control" name="nome" size="35" placeholder="<?php echo "$nome_cliente"?>"><br></label>
                                </div>
                                <div class="col-6 my-2">
                                    <label>Telefone: <input type="text" class="form-control" name="telefone" size="35" placeholder="<?php echo"$telefone_cliente"?>"><br></label>
                                </div>
                                <div class="col-8 my-2">
                                    <label>Email: <input type="text" class="form-control" name="email" size="35" placeholder="<?php echo"$email_cliente"?>"><br></label>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6 my-2">
                                        <label>Senha: <input type="password" class="form-control" name="senha" size="15"><br></label>
                                    </div>
                                    <div class="col-6 my-2">
                                        <label>Confirme sua senha: <input type="password" class="form-control" name="senha" size="15"><br></label>
                                    </div>
                                </div>
                                <div class="col-8 my-2">
                                    <label>Nova foto de perfil: <input type="file" class="form-control" required name="arquivo"></label>
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
        <script src="Scripts/JS/delete-confirm.js"></script>
</body>
