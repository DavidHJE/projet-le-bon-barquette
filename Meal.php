<?php
    require_once("Item.php");

    class Meal extends Item{

        private $Meal_type;


        /**
         * Get the value of Meal_type
         */ 
        public function getMeal_type()
        {
                return $this->Meal_type;
        }

        /**
         * Set the value of Meal_type
         *
         * @return  self
         */ 
        public function setMeal_type($Meal_type)
        {
                $this->Meal_type = $Meal_type;

                return $this;
        }
    }
        
?>