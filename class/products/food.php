<?php 
require_once __DIR__ . '/product.php';

class Food extends Product{
    protected $ingredients;
    protected $expiringDate;

    public function __construct($_name, $_price, $_image, $_descriptionm, $_category, $_permit, $_ingredients, $_expiringDate)
    {
        parent:: __construct($_name, $_price, $_image, $_descriptionm, $_category, $_permit);
        $this-> ingredients = $_ingredients;
        $this-> expiringDate = $_expiringDate;
    }

    public function getIngredients(){
        return $this-> ingredients;
    }

    public function getExpiringDate(){
        return $this-> expiringDate;
    }
}
?>