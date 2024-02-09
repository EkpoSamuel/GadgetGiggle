<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Giggles</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Owl-carousel-CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
        // require functions.php file
        require ('functions.php');
    ?>

</head>
<body>

    <!-- start #header -->
        <header  id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <p class="font-rale font-size-12 text-black-50 m-0">5th Avenue,Rd 3,Okemorosun,Pure water bus-stop,Badagry expressway,Lagos state,Nigeria +2347066961659</p>
                <div class="head font-poppins font-size-14">
                    <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                    <a href="#" class="px-3 border-right text-dark">Wishlist</a>
                </div>
            </div>

            <!-- Primary Navigation -->
                <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Gadget Giggles</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav m-auto font-poppins">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Products <i class="fa fa-chevron-down"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Category <i class="fa fa-chevron-down"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Coming soon</a>
                                </li>
                            </ul>
                            <form action="#" class="font-size-14 font-rale">
                                <a href="cart.php" class="cart py-2 rounded-pill color-primary-bg">
                                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                                </a>
                            </form>
                        </div>
                    </div>
                </nav>
            <!-- Primary Navigation -->
        </header>
    <!-- !start #header -->
   
    <!-- start #main-site -->
        <main id="main-site">