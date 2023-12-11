<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url('medium'); ?>" alt="image miniature de l'article">
                    <h5 class=" card-title color-card-title"><?php the_title(); ?></h5>
                </div>
                <div class="col-9">
                    <h5 class="card-title color-card-title"><?php the_title(); ?></h5>
                    <p class="card-text color-card-text"><?php the_content(); ?></p>
                    <p><?= getPostViews(get_the_ID()); ?> vues</p>
                </div>
            </div>
        </div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>