<?php 
    class Category {
        // ATTRIBUTI
        public $categoryName; 
        public $discount = 0; 

        function __construct($categoryName)
        {
            $this->categoryName = $categoryName; 
        }

        public function setDiscount() {
            if($this->categoryName = "alimentari") {
                $this->discount = 30; 
            } else {
                $this->discount = 0;
                echo "nessuno sconto"; 
            }

        } 
    }

?>