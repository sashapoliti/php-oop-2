<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Foods.php";
include __DIR__ . "/Models/Games.php";
include __DIR__ . "/Models/Accessories.php";

$foods = Prod::create('/foods_db.json', 'Foods');
$games = Prod::create('/games_db.json', 'Games');
$accessories = Prod::create('/accessory_db.json', 'Accessories');
?>

<div class="class3Hero d-flex align-items-center justify-content-center">
    <div class="container content d-flex flex-column align-items-center justify-content-center">
        <div class="logo d-flex align-items-center justify-content-center ">
            <img src="https://images.vexels.com/media/users/3/237180/isolated/preview/888bef446c00874a98cd7614630a3d48-simple-fish-in-fish-tank-doodle.png"
                alt="Immagine logo">
            <h1>ZOOlean</h1>
        </div>
        <h2 class="text-center"> Scopri, Scegli, Sorridi: il tuo e-shop per ogni animale!</h2>
        <h6>Scopri il nostro mondo a misura di acquari e animali</h6>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Ricerca un prodotto" aria-label="Search">
        </form>
    </div>
    <video autoplay muted loop src="images/853913-hd_1920_1080_25fps.mp4" type="video/mp4 "></video>
</div>


<main id="app">

    <!-- filter section -->
    <section>
        <div class="filter-container d-flex ">
            <a href="#" class="filter position-relative ">
                <h2>Cani</h2>
                <img src="https://www.moby-dick.it/foto/categorie/700/1_al.png" alt="Immagine cani">
            </a>
            <a href="#" class="filter position-relative ">
                <h2>Gatti</h2>
                <img src="https://www.moby-dick.it/foto/categorie/700/3_al.png" alt="Immagine cani">
            </a>
            <a href="#" class="filter position-relative ">
                <h2>Pesci</h2>
                <img src="https://www.worldanimalprotection.ca/sites/default/files/styles/600x400/public/media/shutterstock_426651172.jpg?h=17f22bde&itok=AfxiJQvB" alt="Immagine cani">
            </a>
            <a href="#" class="filter position-relative ">
                <h2>Uccelli</h2>
                <img src="https://t4.ftcdn.net/jpg/05/65/36/03/360_F_565360370_LrWWCTxczrmwqpsPYPljiFyE4gFqpecr.jpg" alt="Immagine cani">
            </a>
        </div>
    </section>

    <!-- food section -->
    <section>
        <div class="container">
            <h2 class="text-center mb-5 "><i class="fa-solid fa-bowl-food"></i> Cibo per animali</h2>
            <div class="card-container d-flex flex-wrap">
                <?php foreach ($foods as $food): ?>
                    <a href="#" @click.prevent="addToCart(<?= $food->id ?>, '/foods_db.json')">
                        <div class="card">
                            <div class="container-img">
                                <img class="card-img-top" src="<?= $food->image ?>" alt="<?= $food->name ?>">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title"><i class="<?= $food->category->icon ?>"></i> <?= $food->name ?>
                                    </h5>
                                    <p class="info">
                                        <?php foreach ($food->ingredients as $ingredient) {
                                            echo $ingredient . ', ';
                                        } ?> |
                                        <?= $food->weight ?> | <?= $food->format ?>
                                    </p>
                                </div>
                                <p class="card-text"><?= $food->description ?></p>
                                <span class="price"><?= $food->price ?>€</span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- toys section -->
    <section class="even">
        <div class="container">
            <h2 class="text-center mb-5 "><i class="fa-solid fa-football"></i> Giochi per animali</h2>
            <div class="card-container d-flex flex-wrap">
                <?php foreach ($games as $game): ?>
                    <a href="#" @click.prevent="addToCart(<?= $game->id ?>, '/games_db.json')">
                        <div class="card">
                            <div class="container-img">
                                <img class="card-img-top" src="<?= $game->image ?>" alt="<?= $game->name ?>">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title"><i class="<?= $game->category->icon ?>"></i> <?= $game->name ?>
                                    </h5>
                                    <p class="info">
                                        <?= $game->material ?> | <?= $game->size ?>
                                    </p>
                                </div>
                                <p class="card-text"><?= $game->description ?></p>
                                <span class="price"><?= $game->price ?>€</span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- accessories section -->
    <section>
        <div class="container">
            <h2 class="text-center mb-5 "><i class="fa-solid fa-hat-wizard"></i> Accessori per animali</h2>
            <div class="card-container d-flex flex-wrap">
                <?php foreach ($accessories as $accessory): ?>
                    <a href="#" @click.prevent="addToCart(<?= $accessory->id ?>, '/accessory_db.json')">
                        <div class="card">
                            <div class="container-img">
                                <img class="card-img-top" src="<?= $accessory->image ?>" alt="<?= $accessory->name ?>">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title"><i class="<?= $accessory->category->icon ?>"></i>
                                        <?= $accessory->name ?>
                                    </h5>
                                    <p class="info">
                                        <?php foreach ($accessory->materials as $material) {
                                            echo $material . ', ';
                                        } ?> |
                                        <?= $accessory->weight ?> |
                                    </p>
                                </div>
                                <p class="card-text"><?= $accessory->description ?></p>
                                <span class="price"><?= $accessory->price ?>€</span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<?php
include __DIR__ . "/Views/footer.php"
    ?>