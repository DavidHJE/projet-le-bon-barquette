<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class = "formulaire" style ="text-align: center;">
      <form  method = "POST" action = "inser_table.php">
            <div class="row">
                    <div class="col-xl-4">
                        <input type="radio" id="meal" name="select" value="meal">
                        <label for="meal">Plat</label>
                        <input type="radio" id="dessert" name="select" value="dessert">
                        <label for="dessert">Dessert</label>
                        <input type="radio" id="drink" name="select" value="drink">
                        <label for="drink">Boisson</label>
                        <br>
                        <label for="name">NOM</label><br>
                        <input type="text" id="name" name="name" value=""><br>
                        <label for="price">PRIX</label><br>
                        <input type="number" id="price" name="price" value=""><br>
                        <label for="description">DESCRIPTION</label><br>
                        <input type="text" id="description" name="description" value=""><br>
                        <label for="type">TYPE</label><br>
                        <input type="text" id="type" name="type" value=""><br>
                    </div>
                    <div class = "col-xl-4">
                        <br>
                        <input type="submit" value="Ajouter le produit">
                    </div>
            </div>
        </form> 
    </div>
</body>
</html>