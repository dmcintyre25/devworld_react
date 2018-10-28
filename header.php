<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

</head>
<body>
<div class="container-fluid px-0">    
    
            <header>
                <div class="row px-3">
                    <div class="col-lg-3">            
                        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                    </div>
        
                    <div class="col-lg-9 px-0">  
                        <nav>
                            <?php
                                $defaults = array(
                                'container' => false,
                                'theme_location' => 'primary-menu',
                                'menu_class' => 'no-bullet'
                                );
                                wp_nav_menu( $defaults );
                            ?>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    </div>