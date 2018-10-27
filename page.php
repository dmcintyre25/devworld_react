<?php get_header(); ?>

<h1>DevWorld</h1>


<section>
    <div>
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>

        <?php endwhile; else : ?>
        
            <p><?php _e( 'Sorry, no pages matched your criteria.' ) ?></p>
        
        <?php endif; ?>
    </div>
</section>


<?php get_footer(); ?>