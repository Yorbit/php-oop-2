<?php 
require_once __DIR__ . '/product.php';

class Toy extends Product{
    protected $size;
    protected $materials;

    public function __construct($_name, $_price, $_image, $_descriptionm, $_category, $_permit, $_size, $_materials)
    {
        parent:: __construct($_name, $_price, $_image, $_descriptionm, $_category, $_permit);
        $this-> size = $_size;
        $this-> materials = $_materials;
    }
    
    public function getSize(){
        return $this-> size;
    }

    public function getMaterials(){
        return $this-> materials;
    }
}
?>