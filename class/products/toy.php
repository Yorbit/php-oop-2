<?php 
require_once __DIR__ . '/product.php';

class Toy extends Product{
    protected $materials;
    protected $color;

    public function __construct($_name, $_price, $_image, $_descriptionm, $_category, $_permit, $_materials, $_color)
    {
        parent:: __construct($_name, $_price, $_image, $_descriptionm, $_category, $_permit);
        $this-> materials = $_materials;
        $this-> color = $_color;
    }

    public function getMaterials(){
        return $this-> materials;
    }

    public function getColor(){
        return $this-> color;
    }
}
?>