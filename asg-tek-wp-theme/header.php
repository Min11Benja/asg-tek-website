<?php
/**
 * The header for our theme
 ╔ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═  ═ ═ ═ ═ ═ ═ ╗
       \||/
       \||/     Tema: ASG-Tek_Por_Anana_Casa_Creativa              
     .<><><>.   Autor: Benjamin Martinez Jurez (www.min11benja.com)
    .<><><><>.  Fecha Creacion: 5 Noviembre 2018
    '<><><><>'  Contacto: contacto@anana.mx
    ''<><><>''   
      `''''´    
 ╚ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═  ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ╝
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asg-tek
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
    
<head>
    <!-- Required meta tags -->

    <!-- Set character encoding for the document -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Viewport for responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
     <meta name="author" content="anana">
    <!-- Document Title -->
    <title> ASG Tek | Solucion avanzada </title>
    <!-- Meta Description -->
    <meta name="description" content="ASG Tek | Solucion avanzada">

    <!-- Plugins CSS -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/asan-plugins.css" rel="stylesheet">

    <!-- Asan Style CSS -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/asana-style.css" rel="stylesheet">

    <!-- Asan Cubertfolio CSS -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/cubeportfolio.css" rel="stylesheet">

    <!-- Custome Style CSS -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/custome-style.css" rel="stylesheet">

    <!-- Jarallax -->
    <script src="jarallax/dist/jarallax.min.js"></script>

    <!-- Include it if you want to use Video parallax -->
    <script src="jarallax/dist/jarallax-video.min.js"></script>

    <!-- Responsive Style CSS -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/responsive.css" rel="stylesheet">
	
	<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
    
    <!-- Site Overlay -->
    <div class="site-overlay"></div>

    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--top bar-->
    <div class="top-bar clearfix light">
        <div class="container">
            <div class="float-sm-right">
                <ul class="list-inline mb0">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/asgtek/" class="social-icon-sm si-gray si-gray-round si-facebook" target="_blank">
                                
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            
                            </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="https://twitter.com/asgtekllc" class="social-icon-sm si-gray si-gray-round si-twitter" target="_blank">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/company/asgtek/" class="social-icon-sm si-gray si-gray-round si-linkedin" target="_blank">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>
                    </li>

                </ul>
            </div>
            
            <?php
            
            if(pll_current_language() == 'en') {
                    $sLog='Login';
                    $sReg='Register';
                    $sLang='Language';
                    $sNav='SOLUTIONS';
    
                } else if(pll_current_language() == 'es') {
                    $sLog='Iniciar sesión';
                    $sReg='Regístrate';
                    $sLang='Lenguaje';
                    $sNav='SOLUCIONES';
                }  
            
            ?>
            
            <div class="float-sm-left">
                <ul class="list-inline mb0 links">
                    <li class="list-inline-item"><a href="#"><?php echo $sLog; ?></a></li>
                    <li class="list-inline-item"><a href="#"><?php echo $sReg; ?></a></li>
                    <li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $sLang; ?> </a>
                        <ul class="dropdown-menu lang-dropdown">
                            
                            <?php
                            /*you *must* check for its existence before using it, otherwise your site will badly break with a fatal error at next Polylang update (as WordPress deletes the plugin when updating it).*/
                            if (function_exists('pll_the_languages')) {
                            echo "<li><a href='#' class='dropdown-item'>";
                            pll_the_languages( );
                            } 
                            echo "</a></li>";
                            ?>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/top bar-->

    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--NAV BAR TOP-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Mobile Toggle -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>

            <!--Logo-->
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory');?>/assets/img/asg-tek-logo-slim-01.png" alt="ASG TEK logo oscuro"></a>

            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    
                      <li class="nav-item dropdown dropdown-full-width">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                            <?php echo $sNav; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-mega-fw">
                            
                        <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
					
					<?php
						wp_nav_menu( array(
						
						/*Must be registered with register_nav_menu() in order to be selectable by the user.*/
							'theme_location'	=> 'sub-menu',
							
						/*container_class: css class that is applied to the container.*/
							'container_class'	=> 'mega-menu-content',
							
						/*menu_class: css class to use for the ul element which forms the menu*/
							'menu_class'		=> 'mega-inner-nav list-unstyled text-dark'
						) );
					?>
                        </ul>
                    </li>
                    
                    <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
					
					<?php
						wp_nav_menu( array(
						
						/*Must be registered with register_nav_menu() in order to be selectable by the user.*/
							'theme_location'	=> 'primary',
							
							
						/*container_id: ID that is applied to the container.*/
							'container_id'		=> 'navbarNavDropdown',
							
						/*container_class: css class that is applied to the container.*/
							'container_class'	=> 'navbar-collapse collapse',
							
						/*menu_class: css class to use for the ul element which forms the menu*/
							'menu_class'		=> 'navbar-nav ml-auto'
						) );
					?>
                     
                </ul>
            </div>
        </div>
    </nav>