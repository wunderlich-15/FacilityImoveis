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
    <div class="container-fluid">
        <div class="row my-4">
            <div class="col-8">
                <img src="Images/upload/<?php echo"$img_anuncio"?>" class="img-fluid" alt="...">
                <div class="col">
                    <br><h1><?php echo "$titulo_anuncio"?></h1>
                </div>
            </div>
            <div class="col-4">
                    <div class="col-9" style="background-color:#00bfa2; border-radius:10px; border:1px solid #d8d8d8;">
                            <center><h2 style="font-size:25px; color:white;">R$ <?php echo "$valor_anuncio"?>,00</h2></center>
                    </div>
                    <div class="col-9 my-2" style="background-color:#f9f9f9; border-radius:10px; border:1px solid #d8d8d8;">
                        <center><h3 style="font-size:20px">Detalhes do anunciante</h3></center>
                        <center><h2 style="font-size:25px;"><?php echo "$nome_vendedor"?></h2>
                                <h2 style="font-size:20px; color:#00bfa2;"><i class="bi bi-telephone-fill"></i><?php echo "  $telefone_vendedor"?></h2></center>
                        <div class="d-grid gap-2 col-9 mx-auto">
                            <button class="btn btn-success" style="background-color:#00bfa2; border:1px solid #d8d8d8;" type="submit" name="anunciar" value="anunciar"><i class="bi bi-chat-fill"></i>  Chat</button></p>
                            <button class="btn btn-success" style="background-color:#00bfa2; border:1px solid #d8d8d8;" type="submit" name="anunciar" value="anunciar"><i class="bi bi-megaphone-fill"></i>  Anúncios</button></p>
                        </div>
                    </div>
                    <div class="col-9 my-2" style="background-color:#f9f9f9; border-radius:10px; border:1px solid #d8d8d8;">
                        <center><b><p style="color:#00bfa2; font-size:20px;">Aviso  <i class="bi bi-shield-fill-exclamation"></i></p></b></center>
                        <p>Nós da Facility não nos responsabilizamos por nada compartilhado no chat, sendo esses conteudos de total responsabilidade de seus respectivos autores</p>
                    </div>
                    <?php if($id_corretor === $id_vendedor){?>
                        <div class="col-9 my-2" style="background-color:#f9f9f9; border-radius:10px; border:1px solid #d8d8d8;">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-4">
                                    <a href="edit-product-form.php?id=<?php echo "$id_anuncio"?>" class="btn btn-primary">Editar</a>
                                </div>
                                <div class="col-1">
                                    <form action="Scripts/PHP/Delete-anuncio.php?id=<?php echo"$id_anuncio"?>" method="post" enctype="multipart/form-data">
                                    <button class="btn btn-danger" type="submit" name="delete">Excluir</button>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
        </div>
        <div class="col-11 my-2" style="background-color:#f9f9f9; border-radius:10px; border:1px solid #d8d8d8;">
            <h2 style="color:#00bfa2; font-size:30px;">Detalhes do Anúncio:</h2><br>
            <div class="row">
                <div class="col-5">
                    <label style="color:#00bfa2; font-size:20px">Endereço</label><h2 style="font-size: 25px;"><?php echo "$endereco_anuncio <br> $cep_anuncio, $cidade_anuncio" ?></h2>
                </div>
                <div class="col-4">
                    <label style="color:#00bfa2; font-size:20px">Tipo de Imóvel</label><h2 style="font-size: 25px;"><?php echo "$tipo_anuncio" ?></h2>
                </div>
                <div class="col-3">
                    <label style="color:#00bfa2; font-size:20px">Criação do Anúncio</label><h2 style="font-size: 25px;"><?php echo "$criacao_anuncio" ?></h2>
                </div>
            </div>
            <div class="col-8">
                <br><label style="color:#00bfa2; font-size:20px">Descrição</label><h2 style="font-size: 25px;"><?php echo "$descricao_anuncio" ?></h2>
            </div>
        </div>
    </div>
</body>
<?php
?>