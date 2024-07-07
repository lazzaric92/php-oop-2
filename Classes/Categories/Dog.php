<?php 
require_once __DIR__ . "/Category.php";

class Dog extends Category{
    private $icon;
    private $size;
    private $age;

    public function __construct($size, $age){
        parent::__construct("Cane");
        $this->icon = '<i class="fa-solid fa-dog"></i>';
        $this->size = $size;
        $this->age = $age;
    }

    public function getIcon(){
        return $this->icon;
    }

    public function setIcon($icon){
        $this->icon = $icon;
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