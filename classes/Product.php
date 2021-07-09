<?php 
    require_once __DIR__ . "/Category.php"; 
    
    class Product extends Category {
        // ATTRIBUTI
        public $productName; 
        public $brand; 
        public $price; 
        public $image; 
        public $description; 
        public $lastPrice; 

        // COSTRUTTORE
        function __construct($productName, $brand, $price, $image = "", $description, $categoryName = "") {
            $this->productName = $productName; 
            $this->brand = $brand;
            $this->price = $price;
            $this->image = $image;
            $this->description = $description; 
            parent::__construct($categoryName); 
            $this->categoryName = $categoryName; 
            
        }

        //METODI
        public function finalPrice() {
            $this->setDiscount(); 
            $lastPrice = $this->price - ($this->price * ($this->discount / 100)); 
            return $lastPrice; 
        }
    }


?>