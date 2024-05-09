<?php
include_once __DIR__ . '/Category.php';
class Prod
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $image;
    public Category $category;

    public function __construct($id, $name, $description, $price, $image, $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    public static function create($fileName, $className)
    {
        $items = [];
        $data = file_get_contents(__DIR__ . $fileName);
        $dataToArray = json_decode($data, true);
        $categories = Category::fetchCategories();
        /* var_dump($categories); */

        if ($className === 'Foods') {
            foreach ($dataToArray as $item) {
                $category = null;
                foreach ($categories as $cat) {
                    if ($cat->name == $item['category']) {
                        $category = $cat;
                    }
                }
                $items[] = new Foods($item['id'], $item['name'], $item['description'], $item['price'], $item['image'], $category, $item['ingredients'], $item['weight'], $item['format']);
            }
            return $items;
        } elseif ($className === 'Games') {
            foreach ($dataToArray as $item) {
                $category = null;
                foreach ($categories as $cat) {
                    if ($cat->name == $item['category']) {
                        $category = $cat;
                    }
                }
                $items[] = new Games($item['id'], $item['name'], $item['description'], $item['price'], $item['image'], $category, $item['material'], $item['size']);
            }
            return $items;
            
        } elseif ($className === 'Accessories') {
            foreach ($dataToArray as $item) {
                $category = null;
                foreach ($categories as $cat) {
                    if ($cat->name == $item['category']) {
                        $category = $cat;
                    }
                }
                $items[] = new Accessories($item['id'], $item['name'], $item['description'], $item['price'], $item['image'], $category,  $item['materials'], $item['weight']);
            }
            return $items;
        }

    }
}