<?php get_header(); ?>

<div class="row">
    <div class="col-lg-8">
    <h1>DevWorld</h1>


    <section>
        <div>
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>

            <?php endwhile; else : ?>
            
                <p><?php _e( 'Sorry, no posts matched your criteria.' ) ?></p>
            
            <?php endif; ?>
        </div>
    </section>

    </div>

    <div class="col-lg-4">
        <h2>Sidebar</h2>
    </div>

</div>

<?php get_footer(); ?>