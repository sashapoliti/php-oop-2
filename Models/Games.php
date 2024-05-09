<?php
include_once __DIR__ ."/Product.php";
class Games extends Prod
{
    public $material;
    public $size;
    public function __construct($id, $name, $description, $price, $image, $category, $material, $size)
    {
        parent::__construct($id, $name, $description, $price, $image, $category);
        $this->material = $material;
        $this->size = $size;
    }
}