<?php 
require_once __DIR__ . "/Category.php";

class Dog extends Category{
    private $size;
    private $age;

    public function __construct($name, $size, $age){
        parent::__construct($name);
        $this->size = $size;
        $this->age = $age;
    }

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }
}