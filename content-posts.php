<div class="row mx-4">
    
    <?php

 
    $numPosts = ( is_front_page() ) ? 4 : -1;
    $offset = ( is_front_page() ) ? 1 : 0;    
    $cat = get_query_var('category_name');
    
    $args = array(
        'offset' => $offset,
        'posts_per_page' => $numPosts,
        'category_name' => $cat
    );
    $query = new WP_Query( $args );
    ?>

    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <div class="col-lg-4">
            <div class="card childCard mx-auto">
                <div class="cardImage">                
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small', array('class' => 'img-fluid')); ?></a>
                </div>
                <div class="cardText">
                    <h3 class="text-center cardTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="cardFooter">
                    <div class="cardAuthor">
                        <?php the_author_posts_link(); ?>
                    </div>
                    <div class="cardDate">
                        <p><?php echo get_the_date(); ?></p>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ) ?></p>
    <?php endif; ?>

</div>