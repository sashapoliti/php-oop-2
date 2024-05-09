<?php
include_once __DIR__ ."/Product.php";
class Accessories extends Prod
{
    public $materials;
    public $weight;
    public function __construct($id, $name, $description, $price, $image, $category, $materials, $weight)
    {
        parent::__construct($id, $name, $description, $price, $image, $category);
        $this->materials = $materials;
        $this->weight = $weight;
    }
}