<?php
    require_once("Item.php");

    class Drink extends Item{

        private $Drink_type;



        

        /**
         * Get the value of Drink_type
         */ 
        public function getDrink_type()
        {
                return $this->Drink_type;
        }

        /**
         * Set the value of Drink_type
         *
         * @return  self
         */ 
        public function setDrink_type($Drink_type)
        {
                $this->Drink_type = $Drink_type;

                return $this;
        }
    }
?>