<?php 
require_once __DIR__ . "/Product.php";

class Accessory extends Product{
    private $material;
    private $size;

    public function __construct($name, $price, $imgUrl, $categoryName, $material, $size){
        parent::__construct($name, $price, $imgUrl, $categoryName);
        $this->material = $material;
        $this->size = $size;
    }

    public function getMaterial(){
        return $this->material;
    }

    public function setMaterial($material){
        $this->material = $material;
    }

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }
}