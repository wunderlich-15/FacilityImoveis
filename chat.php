<?php 
require "Pages/header.php"
?>
<?php 
if(isset($_SESSION['status_login']) === false){
    header("location: login.php");
}
?>

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
                                <a class="nav-link"  style="color:black;" aria-current="page" href="painel.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="color:black;" href="meusanuncios.php">Meus Anúncios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:black;" href="anunciar.php">Anunciar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"  style="background-color:#00BFA2; color:white;" href="chat.php">Chat</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color:black;"data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Opções</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="edit-profile-form-corretor.php?id=<?php echo"$id"?>">Editar Perfil</a></li>
                                    <li><a class="dropdown-item" style="color:red;" href="Scripts/PHP/delete-profile-corretor.php?id=<?php echo"$id"?>">APAGAR CONTA</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="Scripts/PHP/logout.php">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>

<?php
if(isset($_SESSION['login_cliente']) === true){
    unset($_SESSION["login_corretor"]);
    $id = $_SESSION["id_cliente"];
    $sql = "SELECT * FROM cliente WHERE id_cliente ='{$id}'";

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
                                <a class="nav-link"   style="color:black;" aria-current="page" href="painel.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" style="background-color:#00BFA2; color:white;" href="chat.php">Chat</a>
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
        </div> 
<?php } ?>
<?php } ?>

<div class="row my-2">
    <div class="col-4">
    </div>
    <div class="col-4">
        <div class="search" style="background-color:#f9f9f9; border-radius:10px; border:1px solid #d8d8d8;">
            <input type="text" name="titulo" style="height:35px; width:380px;" placeholder="Pesquisa" required></input> 
            <button type="submit" class="btn btn-outline-success"><i class="bi bi-search"></i></button>
        </div>  
        <section class="users" style="background-color:#f9f9f9; border-radius:10px; border:1px solid #d8d8d8; max-height:450px;  overflow-y:auto; overflow-x:hidden;"> 
            <div class="col my-2"> 
                <div class="users-list">
                </div>
            </div>
        </section>
    </div>
</div>
<script src="Scripts/JS/chat.js"></script>