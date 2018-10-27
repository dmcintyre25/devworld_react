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
<div class="container">    
    <div class="row">
        <div class="col-lg-12 pink">
            <header>
                <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
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
            </header>
        </div>
    </div>