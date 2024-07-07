<?php 
require_once __DIR__ . "/Product.php";

class Toy extends Product{
    private $features;
    private $size;

    public function __construct($name, $brand, $price, $imgUrl, $category, $features, $size){
        parent::__construct($name, $brand, $price, $imgUrl, $category);
        $this->features = $features;
        $this->size = $size;
    }

    public function getFeatures(){
        return $this->features;
    }

    public function setFeatures($features){
        $this->features = $features;
    }

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }
}