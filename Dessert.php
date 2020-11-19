<?php
    require_once("Item.php");

    class Dessert extends Item{
        
        private $Dessert_type;

        

        /**
         * Get the value of Dessert_type
         */ 
        public function getDessert_type()
        {
                return $this->Dessert_type;
        }

        /**
         * Set the value of Dessert_type
         *
         * @return  self
         */ 
        public function setDessert_type($Dessert_type)
        {
                $this->Dessert_type = $Dessert_type;

                return $this;
        }
    }
?>