<!--Bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!--Bootstrap-->
<head><meta charset="UTF-8"></head>
<?php
include "Scripts/PHP/connect.php";

//Query para o filtro
$query_filtro = "SELECT Distinct cidade_anuncio FROM anuncio";
            $result_filtro=mysqli_query($conexao, $query_filtro); 
            if(mysqli_num_rows($result_filtro) > 0){
            }
?>
<!--Filtro-->
<section>
    <form method="get">
        <div class="container-fluid">
            <div class="row my-4" style="background-color:#00BFA2">
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
                    <label>Preço de:</label>
                    <input type="number" name="preco1" class="form-control">
                </div>
                <div class="col">
                    <label> Á </label>
                    <input type="number" name="preco2" class="form-control">
                </div>
                <div class="col d-flex align-items-end">
                    <button class="btn btn-primary" style="background-color:#319ffc;" type="submit" value="Filtrar">Filtrar</button>
                </div>
                <p>
            </div>
        </div>
    </form>
</section>

<?php
//Filtragem SQL
$filtrocidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_STRING);
$filtroPreco1 = filter_input(INPUT_GET, 'preco1', FILTER_SANITIZE_STRING);
$filtroPreco2 = filter_input(INPUT_GET, 'preco2', FILTER_SANITIZE_STRING);


$query_filtrado = "SELECT * FROM anuncio WHERE cidade_anuncio ='$filtrocidade' AND valor_anuncio BETWEEN '$filtroPreco1' AND '$filtrPreco2'";
$result_filtrado=mysqli_query($conexao, $query_filtrado);
while($row_filtrado=mysqli_fetch_assoc($result_filtrado)){
    extract($row_filtrado);
}
?>