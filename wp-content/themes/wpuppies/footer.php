
    </main>

<footer class="footer-st">
        <div class="font-title text-center p-5">
            <p class="font-title fs-3 text-white">DECOUVREZ</p>
            <p class="font-title fs-2 text-white">Articles les plus populaires</P>
        </div>
        <div class="container-fluid">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <div class="row">
                <div class="col-4">
                    <div class="card mt-5">
                        <img class="card-img-top" src="/wp-content/themes/wpuppies/bg.jpg" alt="Card image cap">
                        <div class="card-body">
                            <span class="badge color-card-badge">Catégorie</span>
                            <h5 class="card-title color-card-title"><?php the_title(); ?></h5>
                            <p class="card-text color-card-text"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mt-5">
                        <img class="card-img-top img-fluid" src="/wp-content/themes/wpuppies/bg2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <span class="badge color-card-badge">Catégorie</span>
                            <h5 class="card-title color-card-title"><?php the_title(); ?></h5>
                            <p class="card-text color-card-text"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mt-5">
                        <img class="card-img-top" src="/wp-content/themes/wpuppies/bg.jpg" alt="Card image cap">
                        <div class="card-body">
                            <span class="badge color-card-badge">Catégorie</span>
                            <h5 class="card-title color-card-title"><?php the_title(); ?></h5>
                            <p class="card-text color-card-text"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="container-fluid justify-content-center text-center p-5 ">
            <div class="row letter-sp">
                <!-- Block Gauche -->
                <div class="col-4 text-center">
                    <h5 class="font-title fw-bold text-center text-white">Accès rapide</h5>
                    <a href="/" class="regular text-decoration-none hover-underline" target="_blank">Accueil</a>
                    <?php
                    $menu_items = wp_get_nav_menu_items('Menu1'); //le nom, le slug ou l'ID du menu
                        foreach ( $menu_items as $menu_item ) {
                            echo '<li class="fast-access">';
                            echo '<a class="text-decoration-none hover-underline regular" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
                            echo '</li>';
                        }
                    ?>
                </div>
                <!-- Partie centrale -->
                <div class="col-4 text-center">
                    <h5 class="font-title fw-bold text-white">Contactez-nous</h5>
                    <p class="regular">70 rue des jacobins<br>80000 Amiens</p>
                    <p><a href="mailto:contactus@lamanu.fr" title="Lien de l'email" class="regular text-decoration-none hover-underline fw-bold">contactus@lamanu.fr</a></p>
                </div>
                <!-- Partie Droite  -->
                <div class="col-4 text-center">
                    <h5 class="mb-1 letter-sp font-title fw-bold">Inscrivez-vous à notre newsletter</h5>
                    <input type="email" class="" placeholder="Entrez votre email"></input>
                </div>
            </div>
        </div>
        <!-- <script src="/wp-content/themes/wpuppies/script.js"></script> -->
    </footer>
    <?php wp_footer(); ?>

</body>
</html>


