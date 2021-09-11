<?php 
require "Pages/header.php";
$id_per = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
?>
<?php
    $id_corretor=isset($_SESSION['id_corretor']);
    $query_anuncio = "SELECT * FROM cliente WHERE id_cliente ='{$id_per}'LIMIT 1";

    $run_sql=mysqli_query($conexao, $query_anuncio);
    if(mysqli_num_rows($run_sql) > 0){
    }
    while($row=mysqli_fetch_assoc($run_sql)){
        $id_cliente = $row["id_cliente"];
        $nome_cliente = $row["nome_cliente"];
        $snome_cliente = $row["snome_cliente"];
        $email_cliente = $row["email_cliente"];
        $telefone_cliente = $row["telefone_cliente"];
        $senha_cliente = $row["senha_cliente"];
        echo"$id_cliente";

    ?>
    <title>Editar: <?php echo"$nome_cliente"?></title>
    <body>
        <div class="container">
            <div class="row">
                <h1>Editar Perfil</h1>
                <div class="col-md-6">
                    img
                </div>
                <div class="col-md-6">
                    <form action="Scripts/PHP/edit-profile-cliente.php?id=<?php echo"$id_cliente"?>" method="Post" enctype="multipart/form-data">
                    <p>Nome: <input type="text" name="nome" size="35" placeholder="<?php echo "$nome_cliente"?>"><br>
                    <p>Sobrenome: <input type="text" name="snome" size="35" placeholder="<?php echo "$snome_cliente"?>"><br>
                    <p>Telefone: <input type="text" name="endereco" size="35" placeholder="<?php echo"$telefone_cliente"?>"><br>
                    <p>Email: <input type="text" name="cidade" size="35" placeholder="<?php echo"$email_cliente"?>"><br>
                    <p>senha: <input type="password" name="descricao" size="35"><br>
                    <p>Confimar a senha: <input type="password" name="descricao" size="35"><br>
                    <p><button type="submit" class="btn btn-success" name="editar" value="editar">Pronto</button></p>
                    <?php } ?>
                </div>
            </div>
        </div>
</body>
