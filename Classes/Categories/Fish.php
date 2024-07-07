<?php 
require_once __DIR__ . "/Category.php";

class Fish extends Category{
    private $icon;
    private $type;

    public function __construct($type){
        parent::__construct("Pesce");
        $this->icon = '<i class="fa-solid fa-fish"></i>';
        $this->type = $type;
    }

    public function getIcon(){
        return $this->icon;
    }

    public function setIcon($icon){
        $this->icon = $icon;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }
}