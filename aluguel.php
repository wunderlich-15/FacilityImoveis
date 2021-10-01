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
    <h1>Aluguel</h1>
    <section>
    <form method="get">
            <div class="row my-4" style="background-color:#00BFA2; border-radius:5px;">
                <div class="col">
                    <label>Cidade</label>
                    <select name="cidade" class="form-control">
                    <?php while($row_filtro=mysqli_fetch_assoc($result_filtro)){
                        extract($row_filtro);?>
                        <option value="<?php echo "$cidade_anuncio"?>"><?php echo "$cidade_anuncio"?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col">
                    <label>Valores de:</label>
                    <input type="number" name="preco1" class="form-control">
                </div>
                <div class="col">
                    <label> Á </label>
                    <input type="number" name="preco2" class="form-control">
                </div>
                <div class="col d-flex align-items-end">
                    <button class="btn btn-primary" type="submit" value="Filtrar">Filtrar</button>
                </div>
                <p>
            </div>
    </form>
</section>
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
            $query_anuncio .="WHERE (1=1)";
            if(isset($_GET["cidade"])){
                $filtrocidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_STRING);
                $query_anuncio .="AND cidade_anuncio = '$filtrocidade'";
            }
            if(isset($_GET["preco1"])){
                $filtroPreco1 = filter_input(INPUT_GET, 'preco1', FILTER_SANITIZE_STRING);
                $query_anuncio .="AND valor_anuncio BETWEEN '$filtroPreco1'";
            }
            if(isset($_GET["preco2"])){
                $filtroPreco2 = filter_input(INPUT_GET, 'preco2', FILTER_SANITIZE_STRING);
                $query_anuncio .="AND '$filtroPreco2'";
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