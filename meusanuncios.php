<?php
require "Pages/header.php";
?>
<title>Meus anuncios</title>
<body>
    <h1>Meus Anuncios</h1>
    <?php
        $id_corretor=$_SESSION['id_corretor'];
        $query_anuncio = "SELECT id_anuncio, titulo_anuncio, valor_anuncio FROM anuncio WHERE id_vendedor = '{$id_corretor}' ORDER BY id_anuncio DESC";
        $result_anuncio=mysqli_query($conexao, $query_anuncio); 
        if(mysqli_num_rows($result_anuncio) > 0){
        }

        while($row_anuncio=mysqli_fetch_assoc($result_anuncio)){
            extract($row_anuncio);
            echo "$titulo_anuncio <br>";
            echo "ID:  $id_anuncio <br>";
            echo "preço: $valor_anuncio <br>";
            echo "<hr>";
        }
    ?>  
</body>