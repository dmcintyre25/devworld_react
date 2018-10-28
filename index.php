<?php get_header(); ?>

<div class="row mx-4">
    <div id="primary" class="col-lg-9">
    <h1>DevWorld</h1>


    <section>
        <div id=>
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>

            <?php endwhile; else : ?>
            
                <p><?php _e( 'Sorry, no posts matched your criteria.' ) ?></p>
            
            <?php endif; ?>
        </div>
    </section>

    </div>

    <div id="secondary" class="col-lg-3">
        <h2>Sidebar</h2>
    </div>

</div>

<?php get_footer(); ?>