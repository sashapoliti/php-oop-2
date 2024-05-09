
<?php
include __DIR__ ."/Product.php";
class Foods extends Prod
{
    public $ingredients;
    public $weight;
    public $format;
    public function __construct($id, $name, $description, $price, $image, $category, $ingredients, $weight, $format)
    {
        parent::__construct($id, $name, $description, $price, $image, $category);
        $this->ingredients = $ingredients;
        $this->weight = $weight;
        $this->format = $format;
    }
}