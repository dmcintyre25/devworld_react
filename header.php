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
    <div class="container-fluid px-0 content">
            <header>
                <div class="row px-2">        
                    <div class="col-lg-12 px-0">  
                        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark py-0">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="<?php echo home_url(); ?>">DevWorld <i class="fas fa-globe"></i></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>                                    
                                </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <?php bootstrap_nav(); ?>
                                </div><!--/.nav-collapse -->
                            </div><!--/.container-fluid -->
                        </nav>
                    </div>                    
                </div>
            </header>
        
    