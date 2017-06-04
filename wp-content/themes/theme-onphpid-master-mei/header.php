<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <!-- Navigation -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url()); ?>" title="Kominfo">
                        <img style="margin-top: -5px;"
                        src="<?php echo get_template_directory_uri() .'/img/bopas.png';?>" class="img-responsive hidden-xs" width="43%">
                         <img style="margin-top: -55px;"
                        src="<?php echo get_template_directory_uri() .'/img/bopas.png';?>" class="img-responsive hidden-lg hidden-md hidden-sm" width="70%">
                    </a>
                    <!-- <a class="navbar-brand img-responsive" href="<?php echo esc_url(home_url()); ?>"
                       style="background-image: url('<?php echo get_template_directory_uri() .'/img/bopas.png';?>'); width: 100%; ">
                   </a> -->
               </div>

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
        /**
         * menu ini akan bekerja bila file bootstrap-walker.php sudah di pasang
         * di functions.php
         */
        wp_nav_menu(
            array(
                'menu'              => 'primary',
                'theme_location'    => 'primary_menu',
                'depth'             => 2,
                'container'         => false,
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
                )
            );
            ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
