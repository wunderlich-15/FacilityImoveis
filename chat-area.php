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
<?php
$id_user = mysqli_real_escape_string($conexao, $_GET['id_user']);
$sql2 = mysqli_query($conexao, "SELECT * FROM users WHERE id_user=$id_user");
if(mysqli_num_rows($sql2) > 0){
    $row2=mysqli_fetch_assoc($sql2);
}
?>
<div class="row my-2">
    <div class="col-4">
    </div>
    <div class="col-4" style="background-color:#f9f9f9; border-radius:10px; border:1px solid #d8d8d8;">
        <div class="col my-2">
            <div class="row">
                <div class="col-1 my-3">
                    <a href="chat.php" style="text-decoration:none; color:black;">
                        <h2><i class="bi bi-arrow-left"></i></h2>
                    </a>
                </div>
                <div class="col-3">
                    <img src="<?php echo $row2['foto_user'] ?>" class="rounded-circle"  style="width:75px; height:75px; border:1px solid #d8d8d8;">
                </div>
                <div class="col-6 my-2">
                    <h5><?php echo $row2['nome_user'] ?></h5>
                    <h5 style="font-size:15px; color:#00bfa2;"><?php echo $row2['ocupacao_user'] ?></h5>
                </div>
            </div>
        </div>
        <div class="col" style="background-color:#91D3FF; border-radius:10px; border:1px solid #d8d8d8; padding:10px 20px 20px 20px; max-height:450px; overflow-y:auto;">
            <div class="card my-2" style="padding:5px; border-radius:15px 15px 15px 0; margin-right:auto; background-color:#00bfa2; color:white; max-width:300px">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            
            </div>
            <div class="card my-2" style="padding:5px; border-radius:15px 15px 0 15px; margin-left:auto; background-color:#fff; max-width:300px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
        </div>
        <div class="input-group mb-3 my-2">
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing-id" value="<?php echo $id ?>" hidden>
                <input type="text" name="incoming-id" value="<?php echo $id_user ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="insira aqui sua mensagem">
                <button type="button" class="btn btn-outline-success"><i class="bi bi-reply-fill"></i></button>
            </form>
        </div>
    </div>
</div>
<script src="Scripts/JS/msg,js"></script>