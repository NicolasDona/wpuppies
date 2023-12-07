<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- style CSS perso -->
    <!-- <link rel="stylesheet" href="/wp-content/themes/wpuppies/style.css"> -->
    <title>Puppies Theme</title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="tlogo" src="/wp-content/themes/wpuppies/logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav ms-auto"><!--Ajustement Droite-->
                    <li class="nav-item me-5">
                        <a class="text-decoration-none hover-underline" href="http://wpuppies.localhost/category/non-classe/">Catégorie 1</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="text-decoration-none hover-underline" href="#">Catégorie 2</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="text-decoration-none hover-underline" href="#">Catégorie 3</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 title-center">
                    <div class="bg-image img-fluid text-center text-white font-title title-ps">
                        <h1>Titre du site</h1>
                    </div>
                </div>
            </div>
        </div>
<?php ?>
    </header>
    <main>

