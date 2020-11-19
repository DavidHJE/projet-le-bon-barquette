<?php
    include("Meal.php");
    include("Dessert.php");
    include("Drink.php");
    include("connexion_bdd.php");

    function dismount($object) {
        $reflectionClass = new ReflectionClass(get_class($object));
        $array = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            $array[$property->getName()] = $property->getValue($object);
            $property->setAccessible(false);
        }
        return $array;
    }

    var_dump($_POST);
    $select = $_POST['select'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $type = $_POST['type'];

    if(isset($select)){

        switch ($select){
            case $select == "meal":

                if( (isset($name) && $name != "") && (isset($price) && $price != 0) && (isset($description) && $description != "") && (isset($type) && $type != "")){
                    $product=new Meal();
                    $product->setName($_POST['name']);
                    $product->setPrice($_POST['price']);
                    $product->setDescription($_POST['description']);
                    $product->setType($_POST['type']);

                    $query=$db->prepare("INSERT INTO meals (id,name,description,price,type,is_meal_of_the_day) values (0,:name,:description,:price,:type,0)");
                    $query->execute(dismount($product));

                }else{
                    echo "erreur un des champ est vide ou mal remplit";
                }
            break;
            
            case $select == "drink":

                if( (isset($name) && $name != "") && (isset($price) && $price != 0) && (isset($description) && $description != "") && (isset($type) && $type != "")){
                    
                    $product=new Drink();
                    $product->setName($_POST['name']);
                    $product->setPrice($_POST['price']);
                    $product->setDescription($_POST['description']);
                    $product->setType($_POST['type']);

                    $query=$db->prepare("INSERT INTO drinks (name,description,price,type) values (:name,:description,:price,:type)");
                    $query->execute(dismount($product));

                }else{
                    echo "erreur un des champ est vide ou mal remplit";
                }
    
            break;
    
            case $select == "dessert":

                if( (isset($name) && $name != "") && (isset($price) && $price != 0) && (isset($description) && $description != "") && (isset($type) && $type != "")){
                    
                    $product=new Dessert();
                    $product->setName($_POST['name']);
                    $product->setPrice($_POST['price']);
                    $product->setDescription($_POST['description']);
                    $product->setType($_POST['type']);

                    $query=$db->prepare("INSERT INTO desserts (`name`,`description`,`type`,`price`) values (:name,:description,:type,:price)");
                    $query->execute(dismount($product));

                }else{
                    echo "erreur un des champ est vide ou mal remplit";
                }
    
    
            break;
        }

        echo"ajout réussi";

    }else{
        echo "erreur un des champ est vide ou mal remplit";
    }


?>