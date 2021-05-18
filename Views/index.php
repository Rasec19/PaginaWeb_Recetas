<?php 
#Llamamos al encabezaado de la pagina
include("../templates/header.php");?>

    <!-- Titulo que hace referencia a la pagina principal de la pagina web -->
    <h1 class="display-3 text-center">¡Recetas deliciosas!</h1>
    <!-- Contenedor de las imagenes principales -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/desayunos/desayuno1.jpg"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/comidas/comida1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/cenas/cena1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/bebidas/bebida1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/snacks/snack1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<?php 
#Llamamos al pie de la pagina
include("../templates/footer.php");?>