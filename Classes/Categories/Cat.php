<?php 
require_once __DIR__ . "/Category.php";

class Cat extends Category{
    private $age;

    public function __construct($age){
        parent::__construct("Gatto", '<i class="fa-solid fa-cat"></i>');
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }
}