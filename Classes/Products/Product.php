<?php 
require_once __DIR__ . "/../Categories/Category.php";
class Product{
    private $name;
    private $brand;
    private $price;
    private $imgUrl;
    private $category;

    public function __construct($name, $brand, $price, $imgUrl, Category $category){
        $this->name = $name;
        $this->brand = $brand;
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

    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($brand){
        $this->brand = $brand;
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