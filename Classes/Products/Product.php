<?php 
require_once __DIR__ . "/../Categories/Category.php";
class Product{
    private $name;
    private $price;
    private $imgUrl;
    private $categoryName;

    public function __construct($name, $price, $imgUrl, Category $categoryName){
        $this->name = $name;
        $this->price = $price;
        $this->imgUrl = $imgUrl;
        $this->categoryName = $categoryName;
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

    public function getCategoryName(){
        return $this->categoryName;
    }

    public function setCategoryName($categoryName){
        $this->categoryName = $categoryName;
    }
}