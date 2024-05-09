<?php
$method = $_SERVER['REQUEST_METHOD'];
$foods = file_get_contents('foods_db.json');
$games = file_get_contents('games_db.json');
$accessory = file_get_contents('accessory_db.json');
$cartJson = file_get_contents('cart_db.json');

if ($method === 'POST') {
    if (isset($_POST['id'])) {
        if ($_POST['path'] === '/foods_db.json') {
            $foodPhp = json_decode($foods, true);
            $cart = json_decode($cartJson, true);
            $cartBuy = [];
            $id = $_POST['id'];
            var_dump($id);
            foreach ($foodPhp as $food) {
                if ($food['id'] === (int) $id) {
                    $cart[] = $food;
                    var_dump($food);
                }
            }
        } elseif ($_POST['path'] === '/games_db.json') {
            $gamePhp = json_decode($games, true);
            $cart = json_decode($cartJson, true);
            $cartBuy = [];
            $id = $_POST['id'];
            var_dump($id);
            foreach ($gamePhp as $game) {
                if ($game['id'] === (int) $id) {
                    $cart[] = $game;
                    var_dump($game);
                }
            }
        } elseif ($_POST['path'] === '/accessory_db.json'){
            $accessoryPhp = json_decode($accessory, true);
            $cart = json_decode($cartJson, true);
            $cartBuy = [];
            $id = $_POST['id'];
            var_dump($id);
            foreach ($accessoryPhp as $accessory) {
                if ($accessory['id'] === (int) $id) {
                    $cart[] = $accessory;
                    var_dump($accessory);
                }
            }
        }
    }


}

$cartJson = json_encode($cart, JSON_PRETTY_PRINT);
file_put_contents('cart_db.json', $cartJson);