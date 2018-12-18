<?php

/*
Template Name: Epicore
*/

/**
 * The template for displaying in blog
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

<!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->

    <?php

    if(pll_current_language() == 'en') {
         
            
        } else if(pll_current_language() == 'es') {
          
            
        }  

    ?>
    <!--HERO PARRALAX-->
    <div class="bg-parallax fullscreen" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php bloginfo('template_directory');?>/assets/img/epicore-hero-bg-01.png")'>
        <div class="d-flex align-items-center">
            <div class="container">
                <div class=" row">
                    <div class="col-lg-8 mr-auto text-left">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/epicore-logo-icon.png" alt="" class="img-fluid">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/bottom-border-01.png" alt="" class="img-fluid">
                        <p class="lead text-white pt30">Las soluciones de Epicor han sido traducidas y adecuadas para muchos de los mercados líderes y están en uso por miles de compañías a través de Europa, Asia, Australia y América Latina.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--.bg-parallax .fullscreen-->
    <div class="botom-banner-sky">
        .
    </div>

    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--SECTION 02-->
    <div class="container pt60 mb50">

        <div class="row  align-items-center">
            <div class="col-lg-8  wow fadeInUp" data-wow-delay=".300ms">

                <h3 class="mb20"><span class="blue-asg">SOLUCIONES</span></h3>

            </div>
        </div>

        <div class="row align-items-center">

            <div class="col-12  wow fadeInUp" data-wow-delay=".300ms">

                <p class="lead">
                    Las soluciones de tipo ERP le permiten superar a la competencia con operaciones más eficaces un control completo de su empresa y un servicio al cliente de clase mundial.
                </p>

                <p class="lead">
                    Ahora en conjunto con ASG TEK le ofrecemos la certeza de una implementación personalizada de esta tecnología en su empresa, optimizando procesos, utilidades, tiempos de entrega y comunicación en su industria.
                </p>

                <p class="lead">
                    Atendemos las necesidades de cada sector de forma personalizada colaborando con la mejor tecnología e interfaz amigable de EPICOR.
                </p>

            </div>

        </div>
    </div>

    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--SECTION 05 -->
    <section class="bg-rainbow-asg">
        <div class="container  ">
            <div class="row align-items-center text-center">
                <div class="col-md-4 mb30 ">
                    <div class="promo-box promo-dark">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/epicore-icon-1.png" alt="" class="img-fluid">
                        <h3>CONTROL</h3>

                    </div>
                </div>
                <div class="col-md-4 mb30 ">
                    <div class="promo-box promo-dark">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/epicore-icon-2.png" alt="" class="img-fluid">
                        <h3>OPTIMIZACIÓN<br>PERSONALIZADA</h3>

                    </div>
                </div>
                <div class="col-md-4 mb30 ">
                    <div class="promo-box promo-dark">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/epicore-icon-3.png" alt="" class="img-fluid">
                        <h3>RENTABILIDAD</h3>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--SECTION 05 -->
    <div class="half-image-content ">
        <div class="content-img bg-parallax pos-left hidden-lg-down" data-jarallax='{"speed": 0.2}' style="background:url(<?php bloginfo('template_directory');?>/assets/img/img-half-epicore-bg-01.jpg) no-repeat;">
        </div>
        <img src="<?php bloginfo('template_directory');?>/assets/img/img-half-epicore-bg-01.jpg" class="visible-lg-down img-fluid hidden-lg-up" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ml-lg-auto pt70   wow fadeInUp" data-wow-delay=".150ms">
                    <h2 class="mb40">
                        CONOCE MÁS SOBRE <span class="blue-asg">EPICOR ERP</span>
                    </h2>
                    <div class="clearfix">
                        <div class="media mb30" >
                           
                            <div class="lead">
                            
                                Este tour te permitirá interactuar con las herramientas que EPICOR tiene para tu industria.
                            </div>
                        </div>
                
                        <a href="https://www.epicor.com/company/virtual-tours.aspx" target="_blank" class="btn btn-outline-info mb5">IR AL TOUR VIRTUAL</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--half image section-->

    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--SECTION 06 -->

    <div class="container pt60 mb50">
        <div class="row mb40">
                <div class="col-lg-6 mb30">
                    <div class="icon-box icon-box-center icon-border-box bg-gray">
                      
                        <h4>Demo Gratuita</h4>
                        <p>
                           Siéntase en la confianza de solicitar un DEMO gratuito y experimentar lo que EPICOR puede hacer por su industria.
                        </p>
                          <a href="https://www.epicor.com/lac/erp-systems/epicor-erp.aspx" class="btn btn-outline-info mb5 " target="_blank"><i class="fa fa-play"></i>OBTEN DEMO</a>
                    </div>
                </div>
           
                <div class="col-lg-6 mb30">
                    <div class="icon-box icon-box-center icon-border-box bg-gray">
                   
                        <h4>Ebooks Gratuitos</h4>
                        <p>
                            Queremos proveerle de información oportuna para que tome la decisión correcta para su industria.
                        </p>
                          <a href="https://www.epicor.com/lac/business-need.aspx" class="btn btn-outline-info mb5 " target="_blank"><i class="fa fa-download"></i>DESCARGAR</a>
                    </div>
                </div>
            </div>
    </div>

    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    
        <div class="container  ">
        <div class="row align-items-center">
            <div class="col-md-8  wow fadeInUp" data-wow-delay=".300ms">


                <h3 class="lead"><strong>¿NO PUEDES ESPERAR A QUE TE CONTACTEMOS?</strong></h3>
                
                <p class="lead">
                   ¡Llámenos ahora!<br>
                    Es un placer atenderle en +1 281 769 20 55
                </p>
                <img src="<?php bloginfo('template_directory');?>/assets/img/bottom-border-01.png" alt="" class="img-fluid">

            </div>
            <div class="col-md-4 mb30">
                <img src="<?php bloginfo('template_directory');?>/assets/img/hand-phone-icon.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    
    <!--SECTION 06 -->
    <div class="container  mb50">
        <div class="promo-box promo-border text-left wow fadeInUp" data-wow-delay=".300ms">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="lead"><strong>PÓNGASE EN CONTACTO<br>CON VENTAS Y COTIZACIONES </strong> </h3>

                </div>
                <div class="col-md-4">
                    <!--CHANGE LINK BASED ON ID: CONTACT ID = 17-->
                    <a href="<?php echo get_page_link(17); ?>" class="btn btn-outline-info mb5 " ><i class="fa fa-phone"></i> CONTÁCTANOS</a>
                </div>
            </div>
        </div>
    </div>
    <!--/promo box-->
    <div class="botom-banner-blue">
        .
    </div>
   
    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--SECTION 06 -->


    <div class="container-fluid pt70 pb30">
        <div class="row no-margin">
            <div class="col-lg-8  mr-auto ml-auto">
                <div class="title-heading1 mb30">
                    <h3 class="mb20"><span class="blue-asg">SOLUCIONES</span></h3>
                    <p class="lead">Firmemente comprometidos a lograr la máxima satisfacción y desarrollo de tu empresa superando expectativas en cada industria:</p>
                </div>
            </div>
        </div>
        <div class="row " id="industrias">
            <div class="col-lg-4 col-md-6 no-padding">
                <div class="team-card">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/manufacture-thumbnail.jpg" alt="" class="img-fluid">
                    <div class="team-overlay align-items-center">
                        <div class="team-detail">



                            <h4>Automotríz</h4>

                            <div class="seprator-overlay"></div>
                            <span>Aumente sus probabilidades de atracción de inversión e impulse su empresa hasta lograr procesos excelentemente optimizados y mapeados.</span>
                            <ul class="list-inline">
                                <!--CHANGE LINK BASED ON ID: AUTOMOTRIZ ID = 88-->
                                <a class="btn btn-outline-info mb5 text-white" href="<?php echo get_page_link(88); ?>"> Ver más</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-lg-4 col-md-6 no-padding">
                <div class="team-card">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/metal-metalica-thumbnail.jpg" alt="" class="img-fluid">
                    <div class="team-overlay align-items-center">
                        <div class="team-detail">
                            <h4>Metal-mecánica</h4>

                            <div class="seprator-overlay"></div>
                            <span>La revolución industrial 4.0 trae la digitalización de procesos y se ha vuelto requisito de competitividad, descubre como implementarla de la mano de los mejores asesores. </span>
                            <ul class="list-inline">
                                <!--CHANGE LINK BASED ON ID: METAL MECANICA ID = 90 -->
                                <a class="btn btn-outline-info mb5 text-white" href="<?php echo get_page_link(90); ?>"> Ver más</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/col-->
            <div class="col-lg-4 col-md-6 no-padding">
                <div class="team-card">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/aguacate-thumbnail.jpg" alt="" class="img-fluid">
                    <div class="team-overlay align-items-center">
                        <div class="team-detail">
                            <h4>Alimentaria</h4>


                            <div class="seprator-overlay"></div>
                            <span>Preparese para ser referencia ejemplar en el sector en cuanto a producción, eficiencia y optimización de recursos. </span>
                            <ul class="list-inline">
                                 <!--CHANGE LINK BASED ON ID: METAL MECANICA ID = 92 -->
                                <a class="btn btn-outline-info mb5 text-white" href="<?php echo get_page_link(92); ?>"> Ver más</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/col-->
        </div>
    </div>
<!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->

<?php get_footer(); ?>