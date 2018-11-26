<?php get_header(); ?>

<div id="leadingBody">

<div class="row mx-4 pt-3">
    <div id="primary" class="col-lg-8">  

    <section>
        <div class="text-center">
                <h1 class="title"><?php echo $site_description = get_bloginfo( 'description', 'display' ); ?></h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="leadingCard mx-auto">

                        <?php
                        $args = array(
                            'posts_per_page' => 1
                        );
                        $query = new WP_Query( $args );
                        ?>

                        <?php if( $query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>

                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?></a>
                        <?php endwhile; else : ?>
            
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ) ?></p>
        
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>

                  
        </div>
    </section>

    </div>

    <div id="secondary" class="col-lg-4">
        <div class="card sidebarCard">
            <form action="https://devopsroom.us17.list-manage.com/subscribe/post?u=a306fcdde0da1de392b6ddb5c&amp;id=30f0baed76" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div class="form-group text-center">
                    
                    <label class="sidebarHeader" for="mce-EMAIL">JOIN OUR MONTHLY NEWSLETTER</label>
                        
                    <div class="input-group">
                        <input type="email" value="" name="EMAIL" id="mce-EMAIL" required="required" class="form-control" placeholder="Enter email">

                        <span class="input-group-btn">
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a306fcdde0da1de392b6ddb5c_33038453d5" tabindex="-1" value=""></div>
                            <div class="clear">&nbsp;<button class="btn btn-primary" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"><i class="fas fa-paper-plane"></i>&nbsp;</button></div>
                        </span>
                    </div>   
                </div>
            </form>
        </div>
        <div class="card sidebarCard">
            <span class="sidebarHeader text-center">    
            Recent Posts
            </span>

            <?php
                $numPosts = ( is_front_page() ) ? 4 : -1;
                $offset = ( is_front_page() ) ? 1 : 0;    
                
                $args = array(
                    'offset' => $offset,
                    'posts_per_page' => $numPosts
                    
                );
                $query = new WP_Query( $args );
                ?>
            
            <ul>
                <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <div class="sidebarMeta">Posted on <?php echo get_the_date(); ?></div>
                </li>


                <?php endwhile; else : ?>
                    <li><?php _e( 'Sorry, no posts matched your criteria.' ) ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </div> 

</div>

</div> 


<?php get_template_part('content', 'posts'); ?>

<?php get_footer(); ?>