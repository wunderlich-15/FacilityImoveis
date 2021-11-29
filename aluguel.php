<?php
require "Pages/header.php";

//Query para o filtro
$query_filtro = "SELECT Distinct cidade_anuncio FROM anuncio";
            $result_filtro=mysqli_query($conexao, $query_filtro); 
            if(mysqli_num_rows($result_filtro) > 0){
            }
?>
<title>Aluguel</title>
<body>
    <div class="container-fluid">
    <h1>Imóveis para alugar</h1>
        <?php
        //Filtragem SQL
            $filtrocidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_STRING);
            $filtroPreco1 = filter_input(INPUT_GET, 'preco1', FILTER_SANITIZE_STRING);
            $filtroPreco2 = filter_input(INPUT_GET, 'preco2', FILTER_SANITIZE_STRING);
            $filtro_encontrado = false;

            $query_anuncio = "SELECT * FROM anuncio Where tipo_anuncio='aluguel'";
            $result_anuncio=mysqli_query($conexao, $query_anuncio); 
            if(mysqli_num_rows($result_anuncio) > 0){
            }
        if (!empty($_GET)){
            if(!empty($_GET["cidade"])){
                $filtrocidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_STRING);
                $query_anuncio .=" AND cidade_anuncio = '{$filtrocidade}'";
            }
            if(isset($_GET["preco1"])){
                $filtroPreco1 = filter_input(INPUT_GET, 'preco1', FILTER_SANITIZE_STRING);
                $query_anuncio .=" AND valor_anuncio BETWEEN '{$filtroPreco1}' AND '{$filtroPreco2}'";
            }

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