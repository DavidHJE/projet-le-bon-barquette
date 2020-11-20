<?php
    require_once("Item.php");

    class Meal extends Item{

        private $type;
        private $is_Meal_of_the_day;


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

        /**
         * Get the value of type
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */ 
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }
    }
        
?>