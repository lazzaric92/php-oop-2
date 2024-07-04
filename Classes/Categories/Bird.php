<?php 
require_once __DIR__ . "/Category.php";

class Bird extends Category{
    private $type;

    public function __construct($type){
        parent::__construct("Uccello");
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }
}