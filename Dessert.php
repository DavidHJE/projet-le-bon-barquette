<?php
    require_once("Item.php");

    class Dessert extends Item{
        
        private $type;

        

        /**
         * Get the value of Dessert_type
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of Dessert_type
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