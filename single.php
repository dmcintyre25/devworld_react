<?php get_header(); ?>

<div id="postLead">
    <div class="row mx-4">
        <div class="col-lg-12 postFeature">  

            <section>
                    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                    <div class="row  mx-auto">
                        <div class="col-md-4 col-lg-6">
                            <div class="mx-auto pt-2">
                                <div class="postImage">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small', array('class' => 'img-fluid rounded')); ?></a>
                                </div>                
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-6">     
                            <div class="mx-auto pr-5">
                                <div class="postMeta">
                                    <p>Author: <?php the_author(); ?>
                                    <p>Date: <?php the_date(); ?>
                                    <p>Share</p>
                                    <p>Like</p>
                                </div>                
                            </div>
                        </div>
                    </div> 
            </section>
        </div>  
    </div>
</div> 

<div class="row mx-4 pt-4">
    
        <div class="col-lg-2">
            
        </div>

        <div class="col-lg-8">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

        <div class="col-lg-2">
            
        </div>


    <?php endwhile; ?>
    <?php endif; ?>


</div>

<?php get_footer(); ?>