<!doctype html>
<html lang="fr">
  <head>
    <title>Admin Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
    require_once('../nav.php');
    require_once("../connexion_bdd.php");
    require_once("../Meal.php");
    require_once("../Drink.php");
    require_once("../Dessert.php");

    //requete pour meal of the day
    $query = $db->prepare("select * from meals where is_meal_of_the_day = 1");
    $query->setFetchMode(PDO::FETCH_CLASS,'Meal');
    $query->execute();
    
    $meal_of_the_day = $query->fetchALL();

    //requete pour meal

    $queryMeal = $db->prepare("select * from meals");
    $queryMeal->setFetchMode(PDO::FETCH_CLASS,'Meal');
    $queryMeal->execute();

    $all_meal = $queryMeal->fetchAll();

    //requete pour drink

    $queryDrink = $db->prepare("select * from drinks");
    $queryDrink->setFetchMode(PDO::FETCH_CLASS,'Drink');
    $queryDrink->execute();

    $all_drink = $queryDrink->fetchAll();

    //requete pour dessert

    $queryDessert = $db->prepare("select * from desserts");
    $queryDessert->setFetchMode(PDO::FETCH_CLASS,'Dessert');
    $queryDessert->execute();

    $all_Dessert = $queryDessert->fetchAll();
    

  ?>

  <div class="container">
    <h1 class="text-center mt-2">Dashboard</h1>
    <a href="#" type="button" class="btn btn-primary">Ajouter</a>
    
    <h2>Les plats du jour :</h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="">Nom</th>
          <th scope="col" class="">Description</th>
          <th scope="col" class="">Prix</th>
          <th scope="col" class="">Type</th>
          <th scope="col" class="">Action</th>
        </tr>
      </thead>
      <tbody>
<?php
  foreach($all_meal as $meals) :
    ?>
        <tr>
          <td scope="row"><?=$meals->getName() ?></td>
          <td scope="row"><?=$meals->getDescription() ?></td>
          <td scope="row"><?=$meals->getPrice() ?></td>
          <td scope="row"><?=$meals->getType() ?></td>
          <td>
            <div class="btn-group" role="group">
              <a href="#" type="button" class="btn btn-warning">Retiré des plat du jour</a>
              <a href="#" type="button" class="btn btn-info">Edit</a>
              <a href="#" type="button" class="btn btn-danger">Supprimer</a>
            </div>
          </td>
        </tr>
        <?php
endforeach;
?>
      </tbody>
    </table>

    <hr> 

    <h2>Tous les plats :</h2>
    <table class="table table-hover">
      <thead>
      
        <tr>
          <th scope="col" class="">Nom</th>
          <th scope="col" class="">Description</th>
          <th scope="col" class="">Prix</th>
          <th scope="col" class="">Type</th>
          <th scope="col" class="">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
  foreach($meal_of_the_day as $meal) :
    ?>
        <tr>
        
          <td scope="row"><?=$meal->getName() ?></td>
          <td scope="row"><?=$meal->getDescription() ?></td>
          <td scope="row"><?=$meal->getPrice() ?></td>
          <td scope="row"><?=$meal->getType() ?></td>
          <td>
            <div class="btn-group" role="group">
              <a href="#" type="button" class="btn btn-success">Ajouter dans plat du jour</a>
              <a href="#" type="button" class="btn btn-info">Edit</a>
              <a href="delete_item.php" type="button" class="btn btn-danger">Supprimer</a>
            </div>
          </td>
        </tr>
        <?php
endforeach;
?>
      </tbody>
    </table>

    <hr> 

    <h2>Tous les boissons :</h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="">Nom</th>
          <th scope="col" class="">Description</th>
          <th scope="col" class="">Prix</th>
          <th scope="col" class="">Type</th>
          <th scope="col" class="">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
  foreach($all_drink as $drinks) :
    ?>
        <tr>

        <td scope="row"><?=$drinks->getName() ?></td>
          <td scope="row"><?=$drinks->getDescription() ?></td>
          <td scope="row"><?=$drinks->getPrice() ?></td>
          <td scope="row"><?=$drinks->getType() ?></td>
          <td>
            <div class="btn-group" role="group">
              <a href="#" type="button" class="btn btn-info">Edit</a>
              <a href="#" type="button" class="btn btn-danger">Supprimer</a>
            </div>
          </td>
        </tr>
        <?php
endforeach;
?>
      </tbody>
    </table>

    <hr> 

    <h2>Tous les desserts :</h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="">Nom</th>
          <th scope="col" class="">Description</th>
          <th scope="col" class="">Prix</th>
          <th scope="col" class="">Type</th>
          <th scope="col" class="">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
  foreach($all_Dessert as $desserts) :
    ?>
        <tr>
        <td scope="row"><?=$desserts->getName() ?></td>
          <td scope="row"><?=$desserts->getDescription() ?></td>
          <td scope="row"><?=$desserts->getPrice() ?></td>
          <td scope="row"><?=$desserts->getType() ?></td>
          <td>
            <div class="btn-group" role="group">
              <a href="#" type="button" class="btn btn-info">Edit</a>
              <a href="#" type="button" class="btn btn-danger">Supprimer</a>
            </div>
          </td>
        </tr>
        <?php
endforeach;
?>
      </tbody>
    </table>
    
  </div>

  <?php
    require_once('../footer.php');
  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>