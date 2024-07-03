<?php 
require_once __DIR__ . "/Category.php";

class Bird extends Category{
    private $type;

    public function __construct($name, $type){
        parent::__construct($name);
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }
}