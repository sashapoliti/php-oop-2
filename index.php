<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Foods.php";
include __DIR__ . "/Models/Games.php";
include __DIR__ . "/Models/Accessories.php";

$foods = Prod::create('/foods_db.json', 'Foods');
$games = Prod::create('/games_db.json', 'Games');
$accessories = Prod::create('/accessory_db.json', 'Accessories');
?>
<section>
    <div class="class3Hero">
        <div class="class3Layer">
            <div class="class3HeroText">
                <img class="class3Logo mb-3" src="images/PetLogo.jpg" alt="logo">
                
                <h2 class="mb-3">Cibo - Giochi - Accessori</h2>
                <h1 class="fw-bold fs-1"> Scopri, Scegli, Sorridi: il tuo e-shop per ogni animale!</h1>
            </div>
        </div>
        <video autoplay muted loop src="images/853913-hd_1920_1080_25fps.mp4" style="width: 100%;" type="video/mp4 "></video>
    </div>
</section>

<main id="app" class="class3Main">

    <!-- food section -->
    <section class="container">
        <h2 class="text-center fs-1 mb-5">Cibo per animali</h2>
        <div class="row">
            <?php foreach ($foods as $food): ?>
                <div class="col-4">
                    <div class="card class3Card mb-3">
                        <img class="class3CardImg" src="<?= $food->image ?>" class="class3CardImg" alt="<?= $food->name ?>">
                        <div class="class3CardBody">
                            <h5 class="card-title fs-3"><?= $food->name ?></h5>
                            <p class="card-text fw-bolder"><?= $food->description ?></p>
                            <p class="card-text fs-3"><?= $food->category->name ?></p>
                            <p class="card-text fs-2"><i class="<?= $food->category->icon ?>"></i></p>
                            <button @click="addToCart(<?= $food->id ?>, '/foods_db.json')" class="btn btn-primary class3Button">
                            Aggiungi</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
    <!-- toys section -->
    <section class="container">
        <h2 class="text-center fs-1 mb-5">Giochi per animali</h2>
        <div class="row">
            <?php foreach ($games as $game): ?>
                <div class="col-4">
                    <div class="card class3Card mb-3">
                        <img class="class3CardImg" src="<?= $game->image ?>" class="class3CardImg" alt="<?= $game->name ?>">
                        <div class="class3CardBody">
                            <h5 class="card-title fs-3"><?= $game->name ?></h5>
                            <p class="card-text fw-bolder"><?= $game->description ?></p>
                            <p class="card-text fs-3"><?= $game->category->name ?></p>
                            <p class="card-text fs-2"><i class="<?= $game->category->icon ?>"></i></p>
                            <button @click="addToCart(<?= $game->id ?>, '/games_db.json')" class="btn btn-primary class3Button">Aggiungi</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- accessories section -->
    <section class="container">
        <h2 class="text-center fs-1 mb-5">Giochi per animali</h2>
        <div class="row">
            <?php foreach ($accessories as $accessory): ?>
                <div class="col-4">
                    <div class="card class3Card mb-3">
                        <img class="class3CardImg" src="<?= $accessory->image ?>" class="class3CardImg" alt="<?= $accessory->name ?>">
                        <div class="class3CardBody">
                            <h5 class="card-title fs-3"><?= $accessory->name ?></h5>
                            <p class="card-text fw-bolder"><?= $accessory->description ?></p>
                            <p class="card-text fs-3"><?= $accessory->category->name ?></p>
                            <p class="card-text fs-2"><i class="<?= $accessory->category->icon ?>"></i></p>
                            <button @click="addToCart(<?= $accessory->id ?>, '/accessory_db.json')" class="btn btn-primary class3Button">Aggiungi</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
   
</main>

<?php
include __DIR__ . "/Views/footer.php"
?>