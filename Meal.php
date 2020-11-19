<?php
    require_once("Item.php");

    class Meal extends Item{

        private $Meal_type;
        private $is_Meal_of_the_day;


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

        /**
         * Get the value of is_Meal_of_the_day
         */ 
        public function getIs_Meal_of_the_day()
        {
                return $this->is_Meal_of_the_day;
        }

        /**
         * Set the value of is_Meal_of_the_day
         *
         * @return  self
         */ 
        public function setIs_Meal_of_the_day($is_Meal_of_the_day)
        {
                $this->is_Meal_of_the_day = $is_Meal_of_the_day;

                return $this;
        }
    }
        
?>