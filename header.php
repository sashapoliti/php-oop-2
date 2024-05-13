<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- VueJS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://unpkg.com/axios@1.6.7/dist/axios.min.js"></script>
    <!-- favicon -->
    <link rel="icon" type="image/png"
        href="https://www.shutterstock.com/image-vector/handdrawn-cartoon-doodle-blue-letter-260nw-2391135651.jpg">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" type="text/javascript" defer></script>
    <title>ZOOlean</title>

</head>

<body id="app">
    <header>
        <nav class="h-100 d-flex justify-content-between">
            <ul class="d-flex">
                <a href="#">
                    <li>Offerte</li>
                </a>
                <a href="#">
                    <li>Cibi</li>
                </a>
                <a href="#">
                    <li>Giochi</li>
                </a>
                <a href="#">
                    <li>Accessori</li>
                </a>
                <a href="#">
                    <li>Chi siamo</li>
                </a>
                <a href="#">
                    <li>Contatti</li>
                </a>
                <a href="#">
                    <li>Punti vendita</li>
                </a>
            </ul>
            <ul class="icons d-flex">
                <a href="#">
                    <li><i class="fa-regular fa-user "></i></li>
                </a>
                <a href="#">
                    <li><i class="fa-solid fa-heart  "></i></li>
                </a>

                <a href="#" @click.prevent="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                    <li><i class="fa-solid fa-cart-shopping"></i></li>
                </a>
                <!-- OFFCANVAS -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Il tuo carrello</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <!-- CARD CART -->
                        <div v-for="(item, index) in items" class="card mb-3">
                            <div class="row g-0">
                                <div class="image-container col-md-4">
                                    <img :src="item.image" class="img-fluid rounded-start" :alt="item.name">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body position-relative ">
                                        <h5 class="card-title">{{ item.name }}</h5>
                                        <p class="card-text">{{ item.price }}€</p>
                                        <a href="#" @click.prevent="removeFromCart(item.id, item.name, index)" class="position-absolute bottom-0 end-0"><i class="fa-solid fa-xmark"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>

        </nav>
    </header>