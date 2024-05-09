<?php
class Category
{
    public string $name;
    public string $icon;

    function __construct($name, $icon){
        $this -> name = $name;
        $this -> icon = $icon;
    }

    public static function fetchCategories(){
        // leggiamo il file json
        $data = file_get_contents(__DIR__ . '/categories_db.json');
        // decodifichiamo il json in php
        $dataToArray = json_decode($data, true);
        // creiamo un array vuoto per inserier le categorie
        $categories = [];

        foreach($dataToArray as $key){
            $categories[] = new Category($key['name'], $key['icon']);
        }
        return $categories;
    }
} 