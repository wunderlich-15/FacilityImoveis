<?php
require "Pages/header.php";
?>
<?php
if(isset($_SESSION["status_login"]) === false){
    header("location: login.php");
}

if (isset($_SESSION["login_corretor"]) === false){
    header("location: painel.php");
}

//informações corretor
$id = $_SESSION['id_corretor'];
$sql1 = "SELECT nome_corretor, telefone_corretor FROM corretor WHERE id_corretor = '{$id}'";
$run_sql = mysqli_query($conexao, $sql1);
if(mysqli_num_rows($run_sql) > 0){
}
while($row=mysqli_fetch_assoc($run_sql)){
$nome = $row['nome_corretor'];
$telefone = $row['telefone_corretor'];

}

//inicio informaçãoes do anuncio
if(isset($_POST['anunciar'])){
    $titulo = $_POST['titulo'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep']; 
    $tipo = $_POST['tipo'];
    $imovel = $_POST['imovel'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];
    if(isset($_FILES['arquivo'])){

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()). $extensao;
        $diretorio = "Images/upload/"; 

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

    }
    $sql2 = "INSERT INTO anuncio (titulo_anuncio, endereco_anuncio, cidade_anuncio, cep_anuncio, tipo_anuncio, imovel_anuncio, valor_anuncio, descricao_anuncio, criacao_anuncio, id_vendedor, nome_vendedor, telefone_vendedor, img_anuncio) 
            VALUES ('$titulo', '$endereco', '$cidade', '$cep','$tipo', '$imovel', '$valor', '$descricao', NOW() ,'$id', '$nome', '$telefone', '$novo_nome')";


    if($conexao->query($sql2) === TRUE){
        header("location: meusanuncios.php");
    }
    
    $conexao->db = null;

}
?>
<style>
    body{
        background-image:url(Images/img1.png);
        background-repeat:no-repeat;
    }
</style>
<title>Novo Anuncio</title>
<h1><center>Anunciar</center></h1>
<div class="container my-2" style="background-color:#fff; border:2px solid #00bfa2; opacity:0.95; border-radius:20px;">
    <form action="anunciar.php" method="Post" enctype="multipart/form-data">
        <div class="my-2">
            <div class="col-4 my-2">
                <label>
                Titulo:<span style="color:red; font-size:5">*</span><input type="text" name="titulo" size="60"></label>
            </div>
            <div class="col-3 my-2">
                <label>
                Endereco:<span style="color:red; font-size:5">*</span><input type="text" name="endereco" size="35"><br></label>
            </div>
            <div class="col-3 my-2">
                <label>
                Cidade:<span style="color:red; font-size:5">*</span><input type="text" name="cidade" size="35"><br></label>
            </div>
            <div class="col-2 my-2">
                <label>
                Cep:<span style="color:red; font-size:5">*</span><input type="number" name="cep" size="20"><br></label>
            </div>
            <div class="row my-2">
                <div class="col-3 my-2">
                    <label>
                    Tipo:<span style="color:red; font-size:5">*</span><select name="tipo"><br>
                        <option value="Aluguel">Aluguel</option>
                        <option value="Venda">Venda</option>
                    </select></label>
                </div>
                <div class="col-3 my-2">
                    <label>
                    Imovel:<span style="color:red; font-size:5">*</span><select name="imovel"><br>
                        <option value="Apartamento">Apartamento</option>
                        <option value="Casa">Casa</option>
                    </select></label>
                </div>
            </div>
            <div class="col-3 my-2">
                Valor:<span style="color:red; font-size:5">*</span><input type="number" name="valor" size="35"><br>
            </div>
                <div class="form-floating col-9 my-4">
                    <textarea class="form-control" name="descricao" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;"></textarea>
                    <label for="floatingTextarea2">Descrição</label>
                </div>
            <div class="col-3 my-2">
                Imagem:<span style="color:red; font-size:5">*</span> <input type="file" required name="arquivo">
            </div>
            <div class="row my-2">
                <div class="col-10">
                    <span style="color:red; font-size:10">* Campos de preenchimento obrigatório</span> 
                </div>
                <div class="col-2 my-2">
                    <button class="btn btn-success" type="submit" name="anunciar" value="anunciar">Anunciar</button></p>
                </div>
            </div>
        </div>
</div>
