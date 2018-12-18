<?php

/*
Template Name: Home Page
*/

/**
 * The template for displaying all pages
 *
   ╔ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═  ═ ═ ═ ═ ═ ═ ╗
       \||/
       \||/     Tema: ASG-Tek_Por_Anana_Casa_Creativa              
     .<><><>.   Autor: Benjamin Martinez Jurez (www.min11benja.com)
    .<><><><>.  Fecha Creacion: 5 Noviembre 2018
    '<><><><>'  Contacto: contacto@anana.mx
    ''<><><>''   
      `''''´    
  ╚ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═  ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ╝
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package asg-tek
 */

get_header();
?>

<?php

    if(pll_current_language() == 'en') {
            /*HERO Section*/
            $sHeroH3Title='<span class="blue-asg text-uppercase">Business</span><br>CONSULTING';
            $sHeroP1='Professional advice on the implementation, configuration and customization of ERP Epicor solutions that seeks to maximize profits and streamline processes.';
        
            $sHeroP2='Epicor® prides itself on nearly 40 years of offering innovative business solutions for the manufacturing, distribution, retail, hospitality and service industries around the world.';
        
            $sCTAHero='See more';
            
            /*Section 02*/
            $sSec2H3Title='<h3 class="mb20 text-uppercase">global <span class="blue-asg">reach</span></h3>';
            $sSec2P='Epicor solutions have been translated and suitable for many of the leading markets and are in use by thousands of companies throughout Europe, Asia, Australia and Latin America.';
            
            /*Section 03*/
            $sSec3H3Title='<h3 class="mb20 text-uppercase">about<span class="blue-asg"> us</span></h3>';
            $sSec3P='ASG Tek is the solution that aligns the processes of your company with technology focused on growth and success, following two specific qualities: Agility and Accuracy.';
            
            /*Section 04*/
            $sSec4H3Title='<h3 class="mb20 text-uppercase">our <span class="blue-asg">commitment</span></h3>';
            $sSec4P='Is to increase your productivity with the right balance of production, financial and global market demands.';
        
            /*Section 05*/
            $sSec5H3Title='<h3 class="mb20 text-uppercase"><span class="blue-asg">solutions </span></h3> ';
            $sSec5P='Firmly committed to achieving maximum satisfaction and growth for your company exceeding expectations in each industry:';
            /*Section 06*/
            $sSec6H4TitleA='Automotive Industry';
            $sSec6H4PA='Increase your chances of attracting investment and boost your business to achieve excellently optimized and mapped processes.';
        
            $sSec6H4TitleB='Metalworking Industry';
            $sSec6H4PB='The industrial revolution 4.0 brings the digitalization of processes and has become a requirement of competitiveness, discover how to implement it with the help of the best advisors.';
        
            $sSec6H4TitleC='Food industry';
            $sSec6H4PC='Prepare to be an exemplary reference in the sector in terms of production, efficiency and optimization of resources.';
        
        $sSec6cta = 'Learn more';
            
        } else if(pll_current_language() == 'es') {
        /*HERO Section*/
            $sHeroH3Title='<span class="blue-asg">CONSULTORÍA</span><br>EMPRESARIAL';
            $sHeroP1='Asesoría profesional en la implementación, configuración y personalización de soluciones del ERP Epicor que busca maximizar ganancias y agilizar procesos.';
        
            $sHeroP2='Epicor® se enorgullese de casi 40 años de ofrecer soluciones empresariales innovadoras para las industrias de manufactura, distribución, retail, hospitalidad y servicios alrededor del mundo.';
           
            $sCTAHero='Ver más';
        /*Section 02*/
            $sSec2H3Title='<h3 class="mb20">ALCANCE <span class="blue-asg">GLOBAL</span></h3>';
            $sSec2P='Las soluciones de Epicor han sido traducidas y adecuadas para muchos de los mercados líderes y están en uso por miles de compañías a través de Europa, Asia, Australia y América Latina.';
        /*Section 03*/
            $sSec3H3Title='<h3 class="mb20">ACERCA DE<br><span class="blue-asg">NOSOTROS</span></h3>';
            $sSec3P='ASG Tek somos la solución que alinea los procesos de tu compañía con tecnología enfocada al crecimiento y éxito, siguiendo dos cualidades específicas: Agilidad y Precisión.';
        
        /*Section 04*/
            $sSec4H3Title='<h3 class="mb20">NUESTRO <span class="blue-asg">COMPROMISO</span></h3>';
            $sSec4P='Incrementar tu productividad con el equilibrio adecuado de la producción, lo financiero y las exigencias del mercado global.';
        
        /*Section 05*/
            $sSec5H3Title='<h3 class="mb20"><span class="blue-asg">SOLUCIONES</span> </h3> ';
            $sSec5P='Firmemente comprometidos a lograr la máxima satisfacción y desarrollo de tu empresa superando expectativas en cada industria:';
         /*Section 06*/
            $sSec6H4TitleA='Automotríz';
            $sSec6H4PA='Aumente sus probabilidades de atracción de inversión e impulse su empresa hasta lograr procesos excelentemente optimizados y mapeados.';
        
            $sSec6H4TitleB = 'Metal-mecánica';
            $sSec6H4PB = 'La revolución industrial 4.0  trae la digitalización de procesos y se ha vuelto requisito de competitividad, descubre como implementarla de la mano de los mejores asesores.';
        
            $sSec6H4TitleC = 'Alimentaria';
            $sSec6H4PC = 'Preparese para ser referencia ejemplar en el sector en cuanto a producción, eficiencia y optimización de recursos.';
        
            $sSec6cta = 'Ver más';
            
        }  

    ?>

  <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--HERO CAROUSEL SECTION-->
    <div class="owl-main-slide owl-carousel carousel-dark owl-theme fullscreen">

        <div class="item bg-parallax fullscreen parallax-overlay" style='background-image: url("<?php bloginfo('template_directory'); ?>/assets/img/bg-hero.jpg")'>
            <div class="d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mr-auto text-left">
                            <h3 class="text-white h1 font700 text-capitalize mb20">
                                <?php echo $sHeroH3Title; ?>
                            </h3>
                            <p class="text-white-gray lead hidden-md-down ">
                                <?php echo $sHeroP1; ?>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item bg-parallax fullscreen parallax-overlay" style='background-image: url("<?php bloginfo('template_directory'); ?>/assets/img/hero-bg-3-01.png")'>
            <div class="d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mr-auto text-left">
                            <h3 class="text-white h1 font700 text-capitalize mb20">
                                <span class="blue-asg">EPICOR</span> ERP
                            </h3>
                            <p class="text-white-gray lead hidden-md-down">
                                 <?php echo $sHeroP2; ?>
                            </p>
                            <ul class="list-inline hidden-md-down">
                                <!--OBTENER NUEVA LIGA HACIA CONTACT PAGE CON EL ID: 11 -->
                                <a class="btn btn-outline-info mb5 text-white" href="<?php echo get_page_link(11); ?>"> <?php echo $sCTAHero; ?> </a>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--SECTION 02-->
    <div class="container pt60 mb50">
        <div class="row align-items-center">
            <div class="col-md-6  wow fadeInUp" data-wow-delay=".300ms">

                <img src="<?php bloginfo('template_directory'); ?>/assets/img/epicor-text-01.png" alt="" class="img-fluid">

                <?php echo $sSec2H3Title; ?>
                
                <p class="lead">
                    <?php echo $sSec2P; ?>
                </p>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/bottom-border-01.png" alt="" class="img-fluid">

            </div>
            <div class="col-md-6 mb30">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/sec-2-bg-01.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--PARRALAX BG  SECTION-->
    <div class="bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php bloginfo('template_directory'); ?>/assets/img/about-bg-01.png")'>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 pt30 pb30 text-left wow fadeInUp" data-wow-delay=".300ms">
                    <div class="icon-bg">

                        <?php echo $sSec3H3Title; ?>
                        
                        <p class="lead">
                            
                            <?php echo $sSec3P; ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--SECTION 05 -->
    <div class=" pt20  bg-faded">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb30">
                    <div class="video-icon-image left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/women-blue-bg-01.png" alt="" class="img-fluid">

                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp mb30" data-wow-delay=".300ms">
                    <div class="mb40">
                        
                       <?php echo $sSec4H3Title; ?>
                        
                        <p class="lead">
                            
                            <?php echo $sSec4P; ?>
                            
                        </p>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/bottom-border-01.png" alt="" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--SECTION 06 -->


    <div class="container-fluid pt70 pb30">
        <div class="row no-margin">
            <div class="col-lg-8  mr-auto ml-auto">
                <div class="title-heading1 mb30">
                    
                    <?php echo $sSec5H3Title; ?>
                    
                    <p class="lead">
                        
                         <?php echo $sSec5P; ?>
                        
                    </p>
                </div>
            </div>
        </div>
        <div class="row " id="industrias">
            <div class="col-lg-4 col-md-6 no-padding">
                <div class="team-card">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/manufacture-thumbnail.jpg" alt="" class="img-fluid">
                    <div class="team-overlay align-items-center">
                        <div class="team-detail">



                            <h4>
                             <?php echo $sSec6H4TitleA; ?>
                            </h4>

                            <div class="seprator-overlay"></div>
                            <span>
                            
                                <?php echo $sSec6H4PA; ?>
                            
                            </span>
                            <ul class="list-inline">
                                <!--CHANGE LINK BASED ON ID: AUTOMOTRIZ ID = 88-->
                                <a class="btn btn-outline-info mb5 text-white" href="<?php echo get_page_link(88); ?>">
                                <?php echo $sSec6cta; ?>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-lg-4 col-md-6 no-padding">
                <div class="team-card">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/metal-metalica-thumbnail.jpg" alt="" class="img-fluid">
                    <div class="team-overlay align-items-center">
                        <div class="team-detail">
                            
                            <h4>
                              <?php echo $sSec6H4TitleB; ?>
                            </h4>

                            <div class="seprator-overlay"></div>
                            <span>
                                
                                <?php echo $sSec6H4PB; ?>  
                            
                            </span>
                            <ul class="list-inline">
                                <!--CHANGE LINK BASED ON ID: METAL MECANICA ID = 90 -->
                                <a class="btn btn-outline-info mb5 text-white" href="<?php echo get_page_link(90); ?>">  
                                    <?php echo $sSec6cta; ?>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/col-->
            <div class="col-lg-4 col-md-6 no-padding">
                <div class="team-card">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/aguacate-thumbnail.jpg" alt="" class="img-fluid">
                    <div class="team-overlay align-items-center">
                        <div class="team-detail">
                            <h4>
                                
                            <?php echo $sSec6H4TitleC; ?>
                                
                            </h4>

                            <div class="seprator-overlay"></div>
                            <span>
                            
                                <?php echo $sSec6H4PC; ?> 
                            
                            </span>
                            <ul class="list-inline">
                                <!--CHANGE LINK BASED ON ID: ALIMENTARIA ID = 92 -->
                                <a class="btn btn-outline-info mb5 text-white" href="<?php echo get_page_link(92); ?>"> 
                                    
                                    <?php echo $sSec6cta; ?>
                                    
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/col-->
        </div>
    </div>
    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--FOOTER-->

<?php get_footer(); ?>