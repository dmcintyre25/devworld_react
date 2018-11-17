<?php get_header(); ?>

<section>
    <div class="pageBanner text-center align-middle">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        
            <h1 class="pageTitle"><?php the_title(); ?></h1>

    </div>

    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="pageContent">
                    <p><?php the_content(); ?></p>

                <?php endwhile; else : ?>
                
                    <p><?php _e( 'Sorry, no pages matched your criteria.' ) ?></p>
                
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
</section>


<?php get_footer(); ?>