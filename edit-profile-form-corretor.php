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
        echo"$id_corretor";

    ?>
    <title>Editar: <?php echo"$nome_corretor"?></title>
    <body>
        <div class="container">
            <div class="row">
                <h1>Editar Perfil</h1>
                <div class="col-md-6">
                <form action="Scripts/PHP/edit-profile-corretor.php?id=<?php echo"$id_corretor"?>" method="Post" enctype="multipart/form-data">
                <img src="Images/upload/profile/corretor/<?php echo $row["foto_corretor"]?>" class="img-thumbnail" alt="...">
                <p>Nova foto de perfil: <input type="file" required name="arquivo">
                </div>
                <div class="col-md-6">
                    <form action="Scripts/PHP/edit-profile-corretor.php?id=<?php echo"$id_corretor"?>" method="Post" enctype="multipart/form-data">
                    <p>Nome: <input type="text" name="nome" size="35" placeholder="<?php echo "$nome_corretor"?>"><br>
                    <p>Telefone: <input type="text" name="telefone" size="35" placeholder="<?php echo"$telefone_corretor"?>"><br>
                    <p>Email: <input type="text" name="email" size="35" placeholder="<?php echo"$email_corretor"?>"><br>
                    <p>Creci: <input type="text" name="creci" size="35" placeholder="<?php echo"$creci_corretor"?>"><br>
                    <p>Senha: <input type="password" name="senha" size="35"><br>
                    <p>Confirme a senha: <input type="password" name="senha" size="35"><br>
                    <p><button type="submit" class="btn btn-success" name="editar" value="editar">Pronto</button></p>
                    <?php } ?>
                </div>
            </div>
        </div>
</body>
