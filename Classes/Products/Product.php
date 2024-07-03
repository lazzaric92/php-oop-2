<?php 
require_once __DIR__ . "/../Categories/Category.php";
class Product{
    private $name;
    private $price;
    private $imgUrl;
    private $category;

    public function __construct($name, $price, $imgUrl, Category $category){
        $this->name = $name;
        $this->price = $price;
        $this->imgUrl = $imgUrl;
        $this->category = $category;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getImgUrl(){
        return $this->imgUrl;
    }

    public function setImgUrl($imgUrl){
        $this->imgUrl = $imgUrl;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $this->category = $category;
    }
}