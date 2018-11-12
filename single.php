<?php get_header(); ?>

<div id="postLead">
    <div class="row mx-4">        
            <section>
                    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                    <div class="row mx-4 pt-4"> 
                        
                    
                        <div class="col-lg-2">            
                        </div>

                        <div class="col-lg-8">
                            <div class="mx-auto">
                                <div class="postImage mx-auto pt-3">
                                    <?php the_post_thumbnail('small', array('class' => 'img-fluid rounded')); ?>
                                </div>                
                            </div>
                        </div>


                        <div class="col-lg-2">            
                        </div>

                    </div> 
            </section>     
    </div>
</div> 

<div class="row mx-4 pt-4">
    
        <div class="col-lg-2">
            
        </div>

        <div class="col-lg-8">
            <h1><?php the_title(); ?></h1>
            <div class="postMeta">
                <span class="postField">Author: </span><?php the_author_posts_link(); ?>
                <span class="postField pl-5">Date: </span><?php the_date(); ?>
                <span class="postField pl-5">Category: </span><?php the_category( ', '); ?>
            </div>
            <?php the_content(); ?>
        </div>

        <div class="col-lg-2">
            
        </div>


    <?php endwhile; ?>
    <?php endif; ?>


</div>

<?php get_footer(); ?>