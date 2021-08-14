<?php session_start();
include "connect.php";
if('status_login' === true){
  $id = $_SESSION["id_cliente"];
  $sql="SELECT nome_cliente FROM cliente where id_cliente ='{$id}'";
  $run_sql=mysqli_query($conexao, $sql);
  if(mysqli_num_rows($run_sql) > 0){
  }
  while($row=mysqli_fetch_assoc($run_sql)){
    echo "SEJA BEM-VINDO " . $row["nome_cliente"];
  }
}else{
  session_destroy();
  session_unset();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo 2</title>
    <link rel="stylesheet" href="CSS/main.css">

    <!--provisorio esse caminho-->
    <link rel="stylesheet" href="C:\Users\guilh\Downloads\fontawesome-free-5.15.2-web\fontawesome-free-5.15.2-web\css\all.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script src="Scripts/JS/bootstrap.min.js"></script>
    <!--provisorio esse caminho-->

</head>
<body>
    <nav>
        <div class="menu-icon"><span class="fas fa-bars"></span></div>
        <div class="logo"><img src="Images/Logo/Logo Facility 2.png" width="150px" height="110px"></div>
        <div class="nav-itens">
            <li><a href="#">Home</a></li>
            <li><a href="#">Aluguel</a></li>
            <li><a href="#">Venda</a></li>
            <li><a href="Pagina.html">Sobre</a></li>
        </div>
        <div class="iten-login">
            <li><a href="cadastrocliente.php">login<div class="User-icon"><span class="fas fa-user-alt"></span></div></a></li>
        </div>
        <div class="search-icon"><span class="fas fa-search"></span></div>
        <div class="cancel-icon"><span class="fas fa-times"></span></div>
        <form action="#">
            <input type="Search" class="search-data" placeholder="Pesquisa" required>
            <button type="submit" class="fas fa-search"></button>
        </form>
    </nav>
    <section>
      <div class="Carousel">
         <!--Inicio Do carrossel (Remover caso n for index)-->
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Images/img1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Ajude-nos</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Images/img2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Images/img3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        <!--Fim do Carrossel-->
      </div>
    </section>
    <section class="most-recent">
    <?php
    include_once'connect.php';
    ?>
      
    </section>
     <footer>
      <div class="logo"><img src="Images/Logo/Logo Facility 2.png" width="150px" height="110px"></div>

        <div class="itens-footer">
            <li><a href="#">Home</a></li>
            <li><a href="#">Aluguel</a></li>
            <li><a href="#">Venda</a></li>
            <li><a href="Pagina.html">Sobre</a></li>
        </div>
        <div class="copy">
        <h5>&copy Copyright Facility imóveis 2021 - Todos os direitos reservados </h5>
        </div>    
    </footer>
</body>
</html>