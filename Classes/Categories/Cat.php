<?php 
require_once __DIR__ . "/Category.php";

class Cat extends Category{
    private $age;

    public function __construct($name, $age){
        parent::__construct($name);
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }
}