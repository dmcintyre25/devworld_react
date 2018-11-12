<?php get_header(); ?>



<div id="postLead">
    <div class="row mx-4">        
            <section>                    
                    <div class="row mx-4 pt-4"> 
                        

                        <div class="col-lg-12">
                            <div class="mx-auto">
                            <h1><?php wp_title(''); ?> Posts</h1>
                            </div>
                        </div>


                    </div> 
            </section>     
    </div>
</div> 

<?php get_template_part('content', 'posts'); ?>

<?php get_footer(); ?>