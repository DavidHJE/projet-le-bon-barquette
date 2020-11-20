<?php
require_once('/Drink.php');
require_once('/Dessert.php');
require_once('/Meal.php');
include("../connexion_bdd.php");


$test = "test";
switch case($test){
    case $test == "meal":
        $query=$db->prepare("DELETE from meals where id = ????");
        $query->execute();
    break;
    case  $test == "dessert" :
        $query=$db->prepare("DELETE from desserts where id = ????");
        $query->execute();
    break;
    case $test == "drink"
        $query=$db->prepare("DELETE from drinks where id = ????");
        $query->execute();
    break;  
}

?>