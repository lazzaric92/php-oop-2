<?php 
require_once __DIR__ . "/Category.php";

class Cat extends Category{
    private $icon;
    private $age;

    public function __construct($age){
        parent::__construct("Gatto");
        $this->icon = '<i class="fa-solid fa-cat"></i>';
        $this->age = $age;
    }

    public function getIcon(){
        return $this->icon;
    }

    public function setIcon($icon){
        $this->icon = $icon;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }
}