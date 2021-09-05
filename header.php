<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--	<meta charset="UTF-8">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
    
	<title>
        <?php
            if (is_home()) {
                echo 'AugCat50 - home page';
            } else {
                wp_title();
            }
        ?>
    </title>
   
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
	<!-- Preloader -->
    
	<div id="preloader">
		<div id="status"></div>
	</div>
    
	<!-- Home start -->
    
	<section id="home" class="pfblock-image screen-height home">
        <div class="home-overlay"></div>
		<div class="intro">
			<div class="start">Hello, my name is Andrey (AugCat50) and I am</div>
			<h1>PHP Developer</h1>
			<div class="start">php development, single page applications, cms</div>
		</div>
        
        <a href="#services">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>
        
	</section>
    
	<!-- Home end -->
    
	<!-- Navigation start -->
    
	<header class="header">
        
		<nav class="navbar navbar-custom" role="navigation">
            
			<div class="container">
                
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">AugCat50</a>
				</div>
                
<!--				<div class="collapse navbar-collapse" id="custom-collapse">-->
                <?php
                    //Main Menu
                    wp_nav_menu(array(
                        'theme_location'  => 'primary',
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'custom-collapse',
                        'menu_class'      => 'nav navbar-nav navbar-right'
                    ));
                ?>
<!--
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Home</a></li>
						<li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Works</a></li>
                        <li><a href="#skills">Skills</a></li>
						<li><a href="#testimonials">Testimonials</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
-->
			</div><!-- .container -->
		</nav>
	</header>
	<!-- Navigation end -->
    