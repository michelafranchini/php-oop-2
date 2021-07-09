<?php 

    class User extends Product {
        // ATTRIBUTI
        public $name; 
        public $surname; 
        public $email; 

        private $age; 

        // COSTRUTTORE
        function __construct($name, $surname, $email, $age){
            $this->name = $name; 
            $this->surname = $surname; 
            $this->email = $email; 
            $this->age = $age; 
        }

    }
?>