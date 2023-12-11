<?php get_header(); ?>
<div class="font-title text-center p-5">
    <p class="font-title fs-2 text-white"><?php single_cat_title(); ?></p>
    <p class="font-title fs-3 text-white"><?php echo category_description(); ?></p>
</div>
<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?=the_permalink(); ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>"></a>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p class="text-center">Aucun article trouvé dans cette catégorie.</p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>