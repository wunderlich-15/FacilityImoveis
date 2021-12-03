<?php
require "Pages/header.php";
$id_vendedor = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);


$query_anuncio = "SELECT * FROM anuncio WHERE id_vendedor ='{$id_vendedor}'";
$result_anuncio=mysqli_query($conexao, $query_anuncio); 
if(mysqli_num_rows($result_anuncio) > 0){
}

?>
<div class="container-fluid">
<div class="col-8 my-4">
    <h1>Demais anúncios</h1>
</div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    while($row_anuncio=mysqli_fetch_assoc($result_anuncio)){
    extract($row_anuncio);
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