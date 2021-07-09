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
                $this->discount = 20; 
            } else if ($this->categoryName = "tech") {
                $this->discount = 10; 
            } else {
                $this->discount = 0;
            }
        }
    }

?>