<?php 

require_once __DIR__ . '/product.php';
require_once __DIR__ . '/clientAccess.php';

class Checkout{
    protected $numberProduct;
    protected $totalPrice;
    protected $discount;

    public function __construct($_numberProduct, $_totalPrice, $_discount)
    {
        $this->numberProduct = $_numberProduct;
        $this->totalPrice = $_totalPrice;
        $this->discount = $_discount;
    } 
}
?>