<?php 
require_once __DIR__ . "/Product.php";

class Food extends Product{
    private $netWeight;
    private $ingredients;

    public function __construct($name, $price, $imgUrl, $category, $netWeight, $ingredients){
        parent::__construct($name, $price, $imgUrl, $category);
        $this->netWeight = $netWeight;
        $this->ingredients = $ingredients;
    }

    public function getNetWeight(){
        return $this->netWeight;
    }

    public function setNetWeight($netWeight){
        $this->netWeight = $netWeight;
    }

    public function getIngredients(){
        return $this->ingredients;
    }

    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }
}