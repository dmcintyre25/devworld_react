
    
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

    <div class="container-fluid">
        <div class="row mx-5">        
            <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                
                    <div class="card col-lg-4 col-md-12 px-0 my-2">
                    
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small', array('class' => 'card-img-top p-0 img-fluid')); ?></a>
                            <div class="card-body">
                                <h3 class="text-center card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                        
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                                        
                                <div class="d-flex justify-content-around align-items-end">
                                    <?php the_author_posts_link(); ?>                          
                                    <?php echo get_the_date(); ?>
                                </div>
                            </div>

                    </div>
                
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ) ?></p>

                
            <?php endif; ?>        
        </div>
    </div>
