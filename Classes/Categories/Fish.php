<?php 
require_once __DIR__ . "/Category.php";

class Fish extends Category{
    private $type;

    public function __construct($type){
        parent::__construct("Pesce", '<i class="fa-solid fa-fish"></i>');
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }
}