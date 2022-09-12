<?php

class Product{
    protected $name;
    protected $price;
    protected $image;
    protected $description;
    protected $category;
    protected $permit;

    public function __construct($_name, $_price, $_image, $descriptionm, $_category, $permit)
    {
        $this -> setName($_name);
        $this -> setPrice($_price);
        $this -> setImage($_image);
        $this -> setDescription($_description);
        $this -> setCategory($_category);
        $this -> setPermit($_permit);
    }
}
?>