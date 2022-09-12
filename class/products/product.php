<?php

require_once __DIR__ . '/food.php';
require_once __DIR__ . '/toy.php';

class Product{
    protected $name;
    protected $price;
    protected $image;
    protected $description;
    protected $category;
    protected $permit;

    public function __construct($_name, $_price, $_image, $_descriptionm, $_category, $_permit)
    {
        $this -> setName($_name);
        $this -> setPrice($_price);
        $this -> setImage($_image);
        $this -> setDescription($_description);
        $this -> setCategory($_category);
        $this -> setPermit($_permit);
    }

    public function getName(){
        return $this-> name;
    }

    public function getPrice(){
        return $this-> price;
    }

    public function getImage(){
        return $this-> image;
    }

    public function getDescription(){
        return $this-> description;
    }

    public function getCategory(){
        return $this-> category;
    }

    public function getPermit(){
        return $this-> permit;
    }

    public function setName($_name){
        $this-> name = $_name;
    }

    public function setPrice($_price){
        $this-> price = $_price;
    }

    public function setImage($_image){
        $this-> image = $_image;
    }

    public function setDescription($_description){
        $this-> description = $_description;
    }

    public function setCategory($_category){
        $this-> category = $_category;
    }

    public function setPermit($_permit){
        $this-> permit = $_permit;
    }
}
?>