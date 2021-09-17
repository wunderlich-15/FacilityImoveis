<?php 
require "Pages/header.php";
$id_anun = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
?>
<?php
if (isset($_SESSION['status_login']) === true){
 $id_corretor=($_SESSION['id_corretor']);
}else{
    $id_corretor=isset($_SESSION['id_corretor']);
    unset($_SESSION['status_login']);
}
 $query_anuncio = "SELECT * FROM anuncio WHERE id_anuncio ='{$id_anun}'LIMIT 1";
 $result_anuncio=mysqli_query($conexao, $query_anuncio); 
 if(mysqli_num_rows($result_anuncio) > 0){
 }
 $row_anuncio=mysqli_fetch_assoc($result_anuncio);
 extract($row_anuncio);
?>
<title><?php echo "$titulo_anuncio";?></title>
<body>
    <div class="container">
        <h1><p><?php echo "$titulo_anuncio"?></p></h1>
        <div class="row">
            <div class="col-md-6">
            <img src="Images/upload/<?php echo"$img_anuncio"?>" class="img-fluid" alt="...">
            </div>
            <div class="col-md-6">
                <h2>R$ <?php echo "$valor_anuncio"?></h2><br>
                <h4>Contato:</h4>
                    <p><h4><?php echo"$nome_vendedor <br> $telefone_vendedor"?>
                <h3>Detalhes:</h3>
                    <p><h3><?php echo "$descricao_anuncio"?></h3></p>
                    <p><h3>Tipo:<?php echo "$tipo_anuncio"?></h3></p>

                <?php if($id_corretor === $id_vendedor){?>
                    <a href="edit-product-form.php?id=<?php echo "$id_anuncio"?>" class="btn btn-primary">Editar</a>
                    <form action="Scripts/PHP/Delete-anuncio.php?id=<?php echo"$id_anuncio"?>" method="post" enctype="multipart/form-data">
                    <button class="btn btn-danger" type="submit" name="delete">Excluir</button>
                <?php }?>
            </div>
        </div>
    </div>
</body>
<?php
?>