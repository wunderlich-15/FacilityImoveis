<?php
require "Pages/header.php";
?>
<title>Aluguel</title>
<body>
    <div class="container">
    <h1>Aluguel</h1>
        <?php
            $query_anuncio = "SELECT * FROM anuncio WHERE tipo_anuncio = 'aluguel' ORDER BY id_anuncio DESC";
            $result_anuncio=mysqli_query($conexao, $query_anuncio); 
            if(mysqli_num_rows($result_anuncio) > 0){
            }
        ?>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                while($row_anuncio=mysqli_fetch_assoc($result_anuncio)){
                    extract($row_anuncio);
                ?>
                <div class="col text-center">
                <div class="card h-100">
                <img src="Images/upload/<?php echo"$img_anuncio"?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo "$titulo_anuncio"; ?></h5>
                <p class="card-text"><?php echo "R$ $valor_anuncio /mês"?></p>
                <p class="card-text"><?php echo " $cidade_anuncio"?></p>
                <a href="view-products.php?id=<?php echo $id_anuncio?>" class="btn btn-primary">Detalhes</a>
                </div>
                <div class="card-footer">
                <small class="text-muted">Anunciado em: <?php echo"$criacao_anuncio"?></small>
                </div>
                </div>
                </div>
                <?php    
                }
            ?>
        </div>
    </div> 
</body>