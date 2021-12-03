<?php 
require "Pages/header.php"
?>
<?php 
if(isset($_SESSION['status_login']) === false){
    header("location: login.php");
}
?>
<body>
<?php //include "Scripts/PHP/connect.php";
if (isset($_SESSION["login_corretor"]) === true){
    unset($_SESSION["login_cliente"]);
    $id = $_SESSION["id_corretor"];
   $sql = "SELECT * FROM corretor WHERE id_corretor ='{$id}'";

    $run_sql=mysqli_query($conexao, $sql);
    if(mysqli_num_rows($run_sql) > 0){
    }
    while($row=mysqli_fetch_assoc($run_sql)){
        ?>
        <div class="container-fluid">
            <div class="row my-2">
                <div class="col-2">
                        <img src="Images/upload/profile/corretor/<?php echo $row["foto_corretor"]?>" class="rounded-circle"  style="width:150px; height:150px;">
                </div>
                <div class="col d-flex align-items-center">
                    <div class="container-fluid">
                        <ul class="nav nav-tabs justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active"  style="background-color:#00BFA2; color:white;" aria-current="page" href="painel.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="color:black;" href="meusanuncios.php">Meus Anúncios</a>
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
                                    <li><a class="dropdown-item" href="edit-profile-form-corretor.php?id=<?php echo"$id"?>">Editar Perfil</a></li>
                                    <li><a class="dropdown-item" style="color:red;" href="Scripts/PHP/delete-profile-corretor.php?id=<?php echo"$id"?>"data-confirm='esta ação é irreversivel tem certeza?'>APAGAR CONTA</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="Scripts/PHP/logout.php">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid my-4" style="border:1px solid #00bfa2">
                <div class="col-4 my-4">
                    <h3>Dados Cadastrados:</h3>
                    <p></p>
                </div>
                <div class="row my-4">
                    <div class="col-4">
                        <label>Nome
                            <h4 ><b style="text-align:right;"><?php echo $row["nome_corretor"];?></b></h4>
                        </label>
                    </div>
                    <div class="col-4">
                        <label>Telefone de contato
                            <h4><b><?php echo $row["telefone_corretor"];?></b></h4>
                        </label>
                    </div>
                    <div class="col-4">
                        <label>Creci
                            <h4><b><?php echo $row["creci_corretor"];?></b></h4>
                        </label>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-4">
                        <label>Email
                            <h4><b><?php echo $row["email_corretor"];?></b></h4>
                        </label>
                    </div>
                    <div class="col-4 d-flex align-items-end">
                        <p></p>
                    </div>
                    <div class="col-2 d-flex align-items-end">
                        <a href="edit-profile-form-corretor.php?id=<?php echo"$id"?>"><button class="btn btn-outline-primary">Editar Informações</button></a>
                    </div>
                </div>
            </div>
        </div> 
    <?php } ?>

<!--<a href="edit-profile-form-corretor.php?id=<?php echo"$id"?>">Editar</a>
<a href="anunciar.php"> Anunciar</a>
<a href="meusanuncios.php">Anuncios</a>
<p><a href="Scripts/PHP/delete-profile-corretor.php?id=<?php echo"$id"?>"><button class="btn btn-danger">APAGAR CONTA</button></p>-->
<?php } ?>

<?php
//validação do login do cliente
if(isset($_SESSION['login_cliente']) === true){
    unset($_SESSION["login_corretor"]);
    $id = $_SESSION["id_cliente"];

    //query de seleção dos dados
    $sql = "SELECT * FROM cliente WHERE id_cliente ='{$id}'";

    //metodo de validação da conexão do banco de dados
    $run_sql=mysqli_query($conexao, $sql);
    if(mysqli_num_rows($run_sql) > 0){
    }
    while($row=mysqli_fetch_assoc($run_sql)){
    ?>
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
                                    <li><a class="dropdown-item" style="color:red;" a href="Scripts/PHP/delete-profile-cliente.php?id=<?php echo"$id"?>" data-confirm='esta ação é irreversivel tem certeza?'>APAGAR CONTA</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="Scripts/PHP/logout.php">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid my-4" style="border:1px solid #00bfa2">
                <div class="col-4 my-4">
                    <h3>Dados Cadastrados:</h3>
                    <p></p>
                </div>
                <div class="row my-4">
                    <div class="col-4">
                        <label>Nome
                            <h4 ><b style="text-align:right;"><?php echo $row["nome_cliente"];?></b></h4>
                        </label>
                    </div>
                    <div class="col-4">
                        <label>Telefone de contato
                            <h4><b><?php echo $row["telefone_cliente"];?></b></h4>
                        </label>
                    </div>
                    <div class="col-4">
                        <label>Email
                            <h4><b><?php echo $row["email_cliente"];?></b></h4>
                        </label>
                    </div>
                </div>
                <div class="row my-4">
                <div class="col-4 d-flex align-items-end">
                    <p></p>
                    </div>
                    <div class="col-4 d-flex align-items-end">
                        <p></p>
                    </div>
                    <div class="col-2 d-flex align-items-end">
                        <a href="edit-profile-form-cliente.php?id=<?php echo"$id"?>"><button class="btn btn-outline-primary">Editar Informações</button></a>
                    </div>
                </div>
            </div>
        </div> 
<?php } ?>
<?php } ?>
<script src="Scripts/JS/delete-confirm.js"></script>