<?php 
require "Pages/header.php";
$id_anun = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
?>
<?php
$id_corretor=isset($_SESSION['id_corretor']);
$query_anuncio = "SELECT * FROM anuncio WHERE id_anuncio ='{$id_anun}'LIMIT 1";

$run_sql=mysqli_query($conexao, $query_anuncio);
if(mysqli_num_rows($run_sql) > 0){
}
while($row=mysqli_fetch_assoc($run_sql)){
    $id_anuncio = $row["id_anuncio"];
    $titulo_anuncio = $row["titulo_anuncio"];
    $endereco_anuncio = $row["endereco_anuncio"];
    $cidade_anuncio = $row["cidade_anuncio"];
    $valor_anuncio = $row["valor_anuncio"];
    $descricao_anuncio = $row["descricao_anuncio"];
    $img_anuncio = $row["img_anuncio"];
?>
<style>
    body{
        background-image:url(Images/img2.png);
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
<title>Editar: <?php echo"$titulo_anuncio"?></title>
<body>
    <div class="container-flex my-2" style="background-color:#fff; border:2px solid #00bfa2; opacity:0.95; border-radius:20px;">  
        <div class="row">
            <h1>Editar Anuncio</h1>
            <div class="col-md-6" style="border-right:1px #00bfa2 solid;">
                <form action="Scripts/PHP/edit-anuncio.php?id=<?php echo"$id_anuncio"?>" method="Post" enctype="multipart/form-data">
                <p><img src="Images/upload/<?php echo"$img_anuncio"?>" class="img-fluid" alt="..."></p>
                <p>Foto do anúncio: <input type="file" class="form-control" required name="arquivo"></p>
            </div>
            <div class="col-md-6">
                <form action="Scripts/PHP/edit-anuncio.php?id=<?php echo"$id_anuncio"?>" method="Post" enctype="multipart/form-data">
                <p>Titulo: <input type="text" name="titulo" class="form-control" size="35" placeholder="<?php echo "$titulo_anuncio"?>"><br>
                <p>Endereco: <input type="text" name="endereco" class="form-control" size="35" placeholder="<?php echo"$endereco_anuncio"?>"><br>
                <p>Cidade: <input type="text" name="cidade"  class="form-control" size="35" placeholder="<?php echo"$cidade_anuncio"?>"><br>
                <p>Tipo: <select name="tipo" class="form-control" placeholder="<?php echo"$tipo_anuncio"?>"><br>
                    <option value="aluguel">Aluguel</option>
                    <option value="venda">Venda</option>
                </select>
                <div class="col my-4">
                    <p>Valor: <input type="number" name="valor" class="form-control" size="35" placeholder="<?php echo"$valor_anuncio"?>"><br>
                </div>
                <p>Descricao: <input type="text" name="descricao" class="form-control" size="60" placeholder="<?php echo"$descricao_anuncio"?>"><br>
                <p><button type="submit" class="btn btn-success" name="editar" value="editar">Pronto</button></p>
                <?php } ?>
            </div>
        </div>
    </div>
</body>