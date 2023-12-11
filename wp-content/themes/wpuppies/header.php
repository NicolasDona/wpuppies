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
            <a class="navbar-brand" href="/"><img class="tlogo" src="<?= get_template_directory_uri(); ?>/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"><!--Ajustement Droite-->
                    <?php
                        $menu_items = wp_get_nav_menu_items('Menu1'); //le nom, le slug ou l'ID du menu
                        foreach ( $menu_items as $menu_item ) {
                            echo '<li class="nav-item me-5">';
                            echo '<a class="text-decoration-none hover-underline" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
                            echo '</li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 title-center">
                    <div class="bg-image img-fluid text-center text-white font-title title-ps">
                        <h1><?=get_bloginfo('name'); ?></h1>
                        
                    </div>
                </div>
            </div>
        </div>
<?php ?>
    </header>
    <main>
