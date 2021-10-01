<?php
include "Pages/header.php";
if(!isset($_GET['titulo'])){
    header("location:../index.php");
}
?>
<div class="container">
<?php
$titulo="%".trim($_GET['titulo'])."%";

$query_anuncio = "SELECT * FROM anuncio WHERE titulo_anuncio LIKE '$titulo'";
$result_anuncio=mysqli_query($conexao, $query_anuncio);
?>
<h1> Resultados da sua busca por: <?php echo "$titulo" ?></h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            if (isset($result_anuncio)){
                while($row_anuncio=mysqli_fetch_array($result_anuncio)){
                    extract($row_anuncio);
                ?>
                <div class="col text-center">
                <div class="card h-100">
                <img src="Images/upload/<?php echo"$img_anuncio"?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo "$titulo_anuncio"; ?></h5>
                <p class="card-text"><?php echo "R$ $valor_anuncio"?></p>
                <p class="card-text"><?php echo "$cidade_anuncio"?></p>
                <p class="card-text"><?php echo "$tipo_anuncio"?></p>
                <a href="view-products.php?id=<?php echo $id_anuncio?>" class="btn btn-primary">Detalhes</a>
                </div>
                <div class="card-footer">
                <small class="text-muted">Anunciado em: <?php echo"$criacao_anuncio"?></small>
                </div>
                </div>
                </div>
                <?php    
                }
                }else{ ?>
                 <label> Nenhum resultado correspondente foi encontrado</label> 
            <?php      
                }
            ?>
        </div>
    </div> 
</body>