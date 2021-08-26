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
?>

<h1><center>Anunciar</center></h1>
<title>Novo Anuncio</title>
<form action="anunciar.php" method="Post" enctype="multipart/form-data">
<p>Titulo:<input type="text" name="titulo" size="35"><br>
<p>Endereco:<input type="text" name="endereco" size="35"><br>
<p>Cidade:<input type="text" name="cidade" size="35"><br>
<p>Tipo:<select name="tipo"><br>
    <option value="aluguel">Aluguel</option>
    <option value="venda">Venda</option>
</select>
<p>Valor:<input type="double" name="valor" size="35"><br>
<p>Descricao:<input type="text" name="descricao" size="60"><br>
<p><input type="submit" name="anunciar" value="Anunciar"></p>

<?php
//inicio informaçãoes do anuncio
if(isset($_POST['anunciar'])){
    $titulo = $_POST['titulo'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];

    $sql2 = "INSERT INTO anuncio (titulo_anuncio, endereco_anuncio, cidade_anuncio, tipo_anuncio, valor_anuncio, descricao_anuncio, criacao_anuncio, id_vendedor, nome_vendedor, telefone_vendedor) 
            VALUES ('$titulo', '$endereco', '$cidade','$tipo', '$valor', '$descricao', NOW() ,'$id', '$nome', '$telefone')";


    if($conexao->query($sql2) === TRUE){
        header("location: meusanuncios.php");
        $_SESSION['status_anuncio'] == true;
    }
    
    $conexao->db = null;

}
?>