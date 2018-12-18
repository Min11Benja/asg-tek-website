<?php

/*
Template Name: Automotriz
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

    <?php

    if(pll_current_language() == 'en') {
         
            
        } else if(pll_current_language() == 'es') {
          
            
        }  

    ?>

    <!--HERO PARRALAX-->
    <div class="bg-parallax fullscreen" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php bloginfo('template_directory'); ?>/assets/img/Industriales-Hero-Bg-01.png")'>
        <div class="d-flex align-items-center">
            <div class="container">
                <div class=" row">
                    <div class="col-lg-8 mr-auto text-left">
                        <h3 class="text-white h1 font700 text-capitalize mb20">
                            INDUSTRIA<br><span class="blue-asg">AUTOMOTRIZ</span>
                        </h3>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/bottom-border-01.png" alt="" class="img-fluid">
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
        <div class="row align-items-center">
            <div class="col-12  wow fadeInUp" data-wow-delay=".300ms">

                <p class="lead">
                    La industria automotriz más prometedora del siglo XXI se ha caracterizado por ser acreedora de múltiples inversiones potencializando su crecimiento, sin considerar que la inyección de inversión por si sola no provoca crecimiento, es el buen uso de estas inversiones lo que genera la diferencia.
                </p>

                <p class="lead">
                    El conocimiento y mapeo de procesos permite optimizar cada área productiva utilizando la menor cantidad de recursos para obtener la máxima utilidad, asesórese con ASG Tek los mejores consultores con expertiz en cada área de su empresa que con la herramienta EPICOR ERP pondrán orden y fluidez a cada proceso y conectarán la comunicación y coordinación entre cada área de su industria.

                </p>
       

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
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/img-half-industrail-bg-01.jpg" alt="" class="img-fluid">

                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp mb30" data-wow-delay=".300ms">
                    <div class="mb40">
                        <h3 class="mb20">SOLUCIONES <br> <span class="blue-asg">PARA SATISFACER<br>LOS RETOS DE SU NEGOCIO</span></h3>
                        <!--title-->
                        <div>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-default mb30" role="tablist">
                                
                                <li class="nav-item" role="presentation"><a class="active nav-link" href="#tab-1" aria-controls="profile" role="tab" data-toggle="tab">Apoyo</a></li>
                                
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tab-2" aria-controls="profile" role="tab" data-toggle="tab">Reportes</a></li>
                                
                                <li class="nav-item" role="presentation"><a class=" nav-link" href="#tab-3" aria-controls="home" role="tab" data-toggle="tab">Adiós mermas</a></li>
                                
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tab-4" aria-controls="profile" role="tab" data-toggle="tab">Etiquetas</a></li>
                                
                                <li class="nav-item" role="presentation"><a class=" nav-link" href="#tab-5" aria-controls="home" role="tab" data-toggle="tab">Adm. Proyectos</a></li>
                            
                                <li class="nav-item" role="presentation"><a class=" nav-link" href="#tab-6" aria-controls="home" role="tab" data-toggle="tab">Transparencia</a></li>
        
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                  <div role="tabpanel" class="tab-pane fade" id="tab-1">
                                    Apoyo para la contabilidad a través del uso de la administración de demanda y contratos de compra para números acumulados (CUMs)
                                </div>
                                
                                <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                    Flujos de trabajo y formatos de reportes, listos para usarse en comunicaciones electrónicas e información de notificaciones avanzadas de envío (ASN) de y para sus clientes del sector automotriz
                                </div>
                                
                                 <div role="tabpanel" class="tab-pane fade" id="tab-3">
                                   Plazos de entrega mejorados y reducción de mermas a través de la implementación de estrategias esbeltas (“lean”)
                                </div>
                                
                                 <div role="tabpanel" class="tab-pane fade" id="tab-4">
                                    Funcionalidad de etiquetas compatibles con AIAG, sólida administración del ciclo de vida del producto (PLM) para administración de información del producto y documentos, y administración de calidad avanzada para manejo de PPM, APQP, PPAP y TS-16949
                                </div>
                                
                                <div role="tabpanel" class="tab-pane fade" id="tab-5">
                                    Funciones excepcionales de administración de proyectos
                                </div>
                                
                                <div role="tabpanel" class="tab-pane active show fade" id="tab-6">
                                    Visualización completa con una solución integrada punta-a-punta que contiene tableros incluidos
                                </div>
                                
                                                     

                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    


      <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--SECTION 06 -->

        <div class="container pt60 mb50">
        <div class="row align-items-center">
            <div class="col-6  wow fadeInUp" data-wow-delay=".300ms">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/epicore-logo-icon.png" alt="" class="img-fluid">

            </div>
            
             <div class="col-6  wow fadeInUp top-gray-border" data-wow-delay=".300ms">


            </div>
             <div class="col-12  wow fadeInUp bot-gray-border pb30 pt30" data-wow-delay=".300ms">

                <p class="lead">
                   Las aplicaciones de Epicor para la industria Automotriz es una solución de software empresarial poderosa que provee la flexibilidad y escalabilidad que necesita para mejorar la rentabilidad de su compañía, al optimizar sus recursos más importantes.

                </p>
            </div>

        </div>
    </div>
    
    
            <div class="container pt30 mb50">
        <div class="row align-items-center">
            <div class="col-12  wow fadeInUp" data-wow-delay=".300ms">

                 <p class="lead">
                Dar servicio eficazmente a sus clientes del mercado automotriz y adaptarse a sus crecientes exigencias, requiere una infraestructura de tecnología de información (IT) flexible. Con más de 20 años de experiencia como proveedor de soluciones para 9,000 compañías manufactureras, Epicor® conoce que Usted necesita software que sea muy fácil de instalar (configurar), fácil de usar y fácil de integrar con otros sistemas. La respuesta es una solución de manufactura construida de abajo hacia arriba utilizando una verdadera  arquitectura orientada a servicios (SOA) combinada con una interface de Microsoft® .NET.
                </p>
                <p class="lead">
                Epicor para la Industria Automotriz es un software de Planificación de Recursos Empresariales (ERP) diseñado para organizaciones que fabrican y proveen productos y servicios a esta industria. La solución va más allá de los ERP tradicionales para proveer administración financiera, administración de productos, administración de las relaciones con los clientes (CRM), administración de la cadena de suministro (SCM) y más. La  arquitectura orientada a servicios (SOA) permite tener todo esto disponible como servicios Web, para fácil integración con sus aplicaciones de Microsoft Office y la cadena mundial de suministro. Las herramientas utilizadas para integración son componentes de la  Pirámide de Productividad de Epicor.
                </p>

            </div>

        </div>
    </div>
    
      <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--SECTION 06 -->
  <div class="container  mb50">
            <div class="promo-box promo-border text-left wow fadeInUp" data-wow-delay=".300ms">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="lead"><strong>PÓNGASE EN CONTACTO<br>CON VENTAS Y  COTIZACIONES </strong> </h3>
                        
                    </div>
                    <div class="col-md-4">
                         <!--CHANGE LINK BASED ON ID: CONTACT ID = 17-->
                    <a href="<?php echo get_page_link(17); ?>" class="btn btn-outline-info mb5 " ><i class="fa fa-phone"></i> CONTÁCTANOS</a>
                    </div>
                </div>
            </div>
        </div><!--/promo box-->
    
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