<?php get_header(); ?>

<div class="row mx-4">
    <div id="primary" class="col-lg-9">  

    <section>
        <div class="text-center">
                <h1 class="title">Programming; Cloud; DevOps;</h1>
                <h3 class="subTitle">News, Blog, and Training for Developers</h3>


            <div class="row">
                <div class="col-lg-12 pink">
                    <div class="card leadingCard mx-auto">
                        Main Article
                    </div>
                </div>
            </div>

            <div class="row">                
                <div class="col-lg-6 pink">
                    <div class="card childCard mx-auto">
                        Sub Article Article
                    </div>
                </div>

                <div class="col-lg-6 pink">
                    <div class="card childCard mx-auto">
                        Sub Article Article
                    </div>
                </div>
            </div>

            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            <!-- Post Content Here -->

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