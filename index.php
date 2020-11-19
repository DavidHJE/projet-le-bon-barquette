<!doctype html>
<?php 
  require_once('connexion_bdd.php');
?>
<html lang="fr">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <script type="text/javascript" src="assets/style.css"></script>
  </head>

  <body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
      <a class="navbar-brand" href="#">Le Bon Barquette</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Repas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Boissons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Desserts</a>
        </li>
      </ul>

  </div>
    </nav>
    <header class="container-fluid banner p-5 text-white mt-5">
      <h1 class="text-center font-weight-bold ">Le Bon Barquette</h1>
      <p class="m-5">Le Bon Barquette ouvert du lundi au samedi de 10h  à 23h. 
        <br/> Vous pouvez trouver des repas, des dessert et des boissons.
        <br/>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam facere mollitia nostrum eum consectetur, distinctio eligendi harum beatae recusandae facilis. Laudantium excepturi enim cum voluptate quidem qui atque dignissimos nam?</p>
    </header>

    <section class="container">
      <h1 class="text-center mt-2 font-weight-bold ">Les plats du jour</h1>

      <div class="row">
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <img src="assets/images/img_deflaud.jpg" class="card-img-top">
            <div class="card-body">
              <h2 class="card-title font-weight-bold text-center">Le nom</h2>
              <p class="text-muted mb-0">551€</p>
              <p class="card-text ">La description : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, doloremque! Atque ducimus, eum temporibus minima molestiae voluptatum recusandae, laudantium fugit velit corporis modi dolorem debitis veniam blanditiis aliquid suscipit libero!</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <img src="assets/images/img_deflaud.jpg" class="card-img-top">
            <div class="card-body">
              <h2 class="card-title">Le nom</h2>
              <p class="card-text">La description : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, doloremque! Atque ducimus, eum temporibus minima molestiae voluptatum recusandae, laudantium fugit velit corporis modi dolorem debitis veniam blanditiis aliquid suscipit libero!</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <img src="assets/images/img_deflaud.jpg" class="card-img-top">
            <div class="card-body">
              <h2 class="card-title">Le nom</h2>
              <p class="card-text">La description : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, doloremque! Atque ducimus, eum temporibus minima molestiae voluptatum recusandae, laudantium fugit velit corporis modi dolorem debitis veniam blanditiis aliquid suscipit libero!</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <img src="assets/images/img_deflaud.jpg" class="card-img-top">
            <div class="card-body">
              <h2 class="card-title">Le nom</h2>
              <p class="card-text">La description : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, doloremque! Atque ducimus, eum temporibus minima molestiae voluptatum recusandae, laudantium fugit velit corporis modi dolorem debitis veniam blanditiis aliquid suscipit libero!</p>
            </div>
          </div>
        </div>
      </div>

    </section>

    <footer class="bg-dark text-white footer-copyright text-center py-3">
      &copy; Copyright 2020 : Le bon barquette 
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>