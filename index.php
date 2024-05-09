<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Foods.php";
include __DIR__ . "/Models/Games.php";
include __DIR__ . "/Models/Accessories.php";

$foods = Prod::create('/foods_db.json', 'Foods');
$games = Prod::create('/games_db.json', 'Games');
$accessories = Prod::create('/accessory_db.json', 'Accessories');
?>

<div class="class3Hero  d-flex align-items-center justify-content-center">
    <div class="content d-flex flex-column align-items-center justify-content-center">
        <div class="logo d-flex align-items-center justify-content-center ">
            <img src="https://images.vexels.com/media/users/3/237180/isolated/preview/888bef446c00874a98cd7614630a3d48-simple-fish-in-fish-tank-doodle.png"
                alt="Immagine logo">
            <h1>Zoolean</h1>
        </div>
        <h2> Scopri, Scegli, Sorridi: il tuo e-shop per ogni animale!</h2>
        <h6>Scopri il nostro mondo a misura di acquari e animali</h6>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Ricerca un prodotto" aria-label="Search">
        </form>
    </div>
    <video autoplay muted loop src="images/853913-hd_1920_1080_25fps.mp4" type="video/mp4 "></video>
</div>


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
                            <button @click="addToCart(<?= $food->id ?>, '/foods_db.json')"
                                class="btn btn-primary class3Button">
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
                            <button @click="addToCart(<?= $game->id ?>, '/games_db.json')"
                                class="btn btn-primary class3Button">Aggiungi</button>
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
                        <img class="class3CardImg" src="<?= $accessory->image ?>" class="class3CardImg"
                            alt="<?= $accessory->name ?>">
                        <div class="class3CardBody">
                            <h5 class="card-title fs-3"><?= $accessory->name ?></h5>
                            <p class="card-text fw-bolder"><?= $accessory->description ?></p>
                            <p class="card-text fs-3"><?= $accessory->category->name ?></p>
                            <p class="card-text fs-2"><i class="<?= $accessory->category->icon ?>"></i></p>
                            <button @click="addToCart(<?= $accessory->id ?>, '/accessory_db.json')"
                                class="btn btn-primary class3Button">Aggiungi</button>
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