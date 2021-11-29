<?php require "Pages/header.php";
?>
    <section>
      <div class="Carousel my-2" style="max-height:1000px;">
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
    <div class="container-fluid my-4" style="height: 650px;">
    
    <div class="col-8">
      <h1>Anuncios mais recentes:</h1>
    </div>
      <?php
              $query_anuncio = "SELECT * FROM anuncio ORDER BY id_anuncio DESC LIMIT 3";
              $result_anuncio=mysqli_query($conexao, $query_anuncio); 
              if(mysqli_num_rows($result_anuncio) > 0){
              }
      ?>
              <div class="row row-cols-1 row-cols-md-3 g-4">
              <?php
                  while($row_anuncio=mysqli_fetch_assoc($result_anuncio)){
                      extract($row_anuncio);
                      /*echo "$titulo_anuncio <br>";
                      echo "ID:  $id_anuncio <br>";
                      echo "preço: $valor_anuncio <br>";
                      echo "<hr>";*/
                  ?>
                  <div class="col text-center">
                  <div class="card h-100">
                  <img src="Images/upload/<?php echo"$img_anuncio"; ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title"><?php echo "$titulo_anuncio"; ?></h5>
                  <p class="card-text"><?php echo "R$ $valor_anuncio"?></p>
                  <p class="card-text"><?php echo "$tipo_anuncio"?></p>
                  <p class="card-text"><?php echo "$imovel_anuncio"?></p>
                  <a href="view-products.php?id=<?php echo $id_anuncio?>" style="background-color:#00bfa2; border:1px solid #00bfa2;" class="btn btn-primary">Detalhes</a>
                  </div>
                  </div>
                  </div>
                  <?php    
                  }
              ?>
            </div>
    </div>
<?php require "Pages/footer.php"?>