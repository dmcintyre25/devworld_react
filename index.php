<?php get_header(); ?>

<div id="leadingBody">

<div class="row mx-4">
    <div id="primary" class="col-lg-9">  

    <section>
        <div class="text-center">
                <h1 class="title">News, Blog, and Training for Developers</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card leadingCard mx-auto">
                        <img class="img-fluid rounded" src=<?php print(get_template_directory_uri() . '/featureImage.jpg'); ?>>
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

    <div class="card sidebarCard">

        <form action="https://devopsroom.us17.list-manage.com/subscribe/post?u=a306fcdde0da1de392b6ddb5c&amp;id=33038453d5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="form-group">
            <label for="exampleInputEmail1">Join our mailing list!</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a306fcdde0da1de392b6ddb5c_33038453d5" tabindex="-1" value=""></div>
            <div class="clear"><button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Subscribe</button></div>
        </form>

        </div>
    </div>

    

</div>

</div> 


<div class="row mx-4">
      
    <div class="col-lg-4">
        <div class="card childCard mx-auto">
            <div class="cardImage">                
                <img class="img-fluid" src=<?php print(get_template_directory_uri() . '/featureImage.jpg'); ?>>                
            </div>
            <div class="cardText">
                <h3 class="text-center">Getting Started with React Hooks</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero turpis. In id ante nec metus semper maximus vel eu lorem. Aliquam erat volutpat.</p>
            </div>
            <div class="cardFooter">
                <div class="cardAuthor">
                    <a href="#">Daniel McIntyre</a>
                </div>
                <div class="cardDate">
                    <p>November 7th, 2018</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card childCard mx-auto">
            <div class="cardImage">                
                <img class="img-fluid" src=<?php print(get_template_directory_uri() . '/featureImage.jpg'); ?>>                
            </div>
            <div class="cardText">
                <h3>Article 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero turpis. In id ante nec metus semper maximus vel eu lorem. Aliquam erat volutpat.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card childCard mx-auto">
            <div class="cardImage">                
                <img class="img-fluid" src=<?php print(get_template_directory_uri() . '/featureImage.jpg'); ?>>                
            </div>
            <div class="cardText">
                <h3>Article 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero turpis. In id ante nec metus semper maximus vel eu lorem. Aliquam erat volutpat.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card childCard mx-auto">
            <div class="cardImage">                
                <img class="img-fluid" src=<?php print(get_template_directory_uri() . '/featureImage.jpg'); ?>>                
            </div>
            <div class="cardText">
                <h3>Article 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero turpis. In id ante nec metus semper maximus vel eu lorem. Aliquam erat volutpat.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card childCard mx-auto">
            <div class="cardImage">                
                <img class="img-fluid" src=<?php print(get_template_directory_uri() . '/featureImage.jpg'); ?>>                
            </div>
            <div class="cardText">
                <h3>Article 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero turpis. In id ante nec metus semper maximus vel eu lorem. Aliquam erat volutpat.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card childCard mx-auto">
            <div class="cardImage">                
                <img class="img-fluid" src=<?php print(get_template_directory_uri() . '/featureImage.jpg'); ?>>                
            </div>
            <div class="cardText">
                <h3>Article 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero turpis. In id ante nec metus semper maximus vel eu lorem. Aliquam erat volutpat.</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>