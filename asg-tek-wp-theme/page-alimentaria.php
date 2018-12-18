<?php

/*
Template Name: Alimentaria
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
        
        /*Section 01*/
        $sSection01Title='FOOD<br><span class="blue-asg">INDUSTRY</span>';
        
        /*Section 02*/
        $sSection02PA="The food industry covers many traditional lines of business, delivering products to the retail sector in adequate quantities, for final consumption. Whether you handle packaged consumer goods (including perishable goods), you know that time is money, and that fast-moving trends mean you can not let the product wait on the shelves. You need a technological solution that helps you cover the challenges you face on a daily basis.";
        
        $sSection02PB="ASG-TEK® for Consumer Goods goes beyond a traditional business resource planner (ERP), offering financial management, product management, customer relationship management (CRM), supply chain management (SCM) and more . With Epicor for Consumer Goods, you can expect improvements in efficiency, flexibility and full visualization, resulting in more efficient business management.";
        
         /*Section 03*/
        $sSection03Title='<h3 class="mb20">SOLUTIONS <br> <span class="blue-asg">TO SATISFY<br>THE CHALLENGES OF YOUR BUSINESS</span></h3>';
        $sSection03tab1='Forecasts';$sSection03tab2='Shipments';$sSection03tab3='Flexible prices';$sSection03tab4='Bar codes';$sSection03tab5='Functions';
        
        $sSection03tabDesc1='Use the forecast tools included';$sSection03tabDesc2='Agile management of shipments with support for origins, transporters and international documentation';$sSection03tabDesc3='Flexible prices and discount options, with integration to external price search engines';$sSection03tabDesc4='Strengthening the management of inventories and warehouses with the use of barcode management';$sSection03tabDesc5='Built-in delivery term and available-for-promise functionalities';
        
        /*Section 04*/
        $sSection04Epicore='Epicor applications for the automotive industry are a powerful business software solution that provides the flexibility and scalability you need to improve your companys profitability by optimizing your most important resources.';
        
         $sSection04Epicore2='Regardless of whether it is a local, regional or multinational business, Epicor for Consumer Goods provides the flexibility and scalability you need to grow your companys profitability by optimizing your most important resources. ';
        
        /*Section 05*/
         $sSec5H3Title='<h3 class="mb20 text-uppercase"><span class="blue-asg">solutions </span></h3> ';
            $sSec5P='Firmly committed to achieving maximum satisfaction and growth for your company exceeding expectations in each industry:';
     
            $sSec6H4TitleA='Automotive Industry';
            $sSec6H4PA='Increase your chances of attracting investment and boost your business to achieve excellently optimized and mapped processes.';
        
            $sSec6H4TitleB='Metalworking Industry';
            $sSec6H4PB='The industrial revolution 4.0 brings the digitalization of processes and has become a requirement of competitiveness, discover how to implement it with the help of the best advisors.';
        
            $sSec6H4TitleC='Food industry';
            $sSec6H4PC='Prepare to be an exemplary reference in the sector in terms of production, efficiency and optimization of resources.';
        $sSec6cta = 'Learn more';
        
         $sContactusTitle='<h3 class="lead"><strong>GET IN TOUCH<br>WITH OUR SALES REPRESENTATIVE </strong> </h3>';
        $sContactusCta='CONTACT US';
        
            
        } else if(pll_current_language() == 'es') {
        
        /*Section 01*/
        $sSection01Title='INDUSTRIA<br><span class="blue-asg">ALIMENTARIA</span>';
        
        /*Section 02*/
        $sSection02PA="La industria alimentaria cubre muchas líneas tradicionales de negocios, entregando productos al sector minorista en cantidades adecuadas, para el consumo final. Ya sea que usted maneje bienes de consumo empacados (incluyendo bienes perecederos), usted sabe que el tiempo es oro, y que las tendencias que se mueven rápidamente significan que no puede dejar que el producto espere en los estantes. Necesita una solución tecnológica que le ayude a cubrir los retos que enfrenta diariamente. ";
        
        $sSection02PB="ASG-TEK® para Bienes de Consumo va más allá de un tradicional planeador de recursos empresariales (ERP), ofreciendo administración financiera, administración del producto, administración de relaciones con clientes (CRM), administración de la cadena de suministro (SCM) y más. Con Epicor para Bienes de Consumo, usted puede esperar mejoras en eficiencia, flexibilidad y visualización completa, resultando en una administración de negocio más eficaz. ";
        
        /*Section 03*/
        $sSection03Title='<h3 class="mb20">SOLUCIONES <br> <span class="blue-asg">PARA SATISFACER<br>LOS RETOS DE SU NEGOCIO</span></h3>';
        
        $sSection03tab1='Forecasts';$sSection03tab2='Shipments';$sSection03tab3='Flexible prices';$sSection03tab4='Bar codes';$sSection03tab5='Functions';
        
         $sSection03tabDesc1='Utilice las herramientas de pronósticos incluida';$sSection03tabDesc2='Ágil administración de embarques con soporte para orígenes, transportistas y documentación internacional';$sSection03tabDesc3='Precios flexibles y opciones de descuentos, con integración a motores de búsqueda de precio externos';$sSection03tabDesc4='Fortalecimiento de la administración de inventarios y almacenes con el uso de la administración de códigos de barra';$sSection03tabDesc5='Funcionalidades de administración integrada de plazo de entrega y disponible-para-promesa';
        
         $sSection04Epicore='Las aplicaciones de Epicor para la industria Automotriz es una solución de software empresarial poderosa que provee la flexibilidad y escalabilidad que necesita para mejorar la rentabilidad de su compañía, al optimizar sus recursos más importantes.';
        
         $sSection04Epicore2='Sin importar si es un negocio local, regional o multinacional, Epicor para Bienes de Consumo provee la flexibilidad y escalabilidad que necesita para crecer la rentabilidad de su compañía optimizando sus recursos más importantes. ';
        
        $sSec6H4TitleA='Automotríz';
        
        $sSec5H3Title='<h3 class="mb20"><span class="blue-asg">SOLUCIONES</span> </h3> ';
            $sSec5P='Firmemente comprometidos a lograr la máxima satisfacción y desarrollo de tu empresa superando expectativas en cada industria:';
        
            $sSec6H4PA='Aumente sus probabilidades de atracción de inversión e impulse su empresa hasta lograr procesos excelentemente optimizados y mapeados.';
        
            $sSec6H4TitleB = 'Metal-mecánica';
            $sSec6H4PB = 'La revolución industrial 4.0  trae la digitalización de procesos y se ha vuelto requisito de competitividad, descubre como implementarla de la mano de los mejores asesores.';
        
            $sSec6H4TitleC = 'Alimentaria';
            $sSec6H4PC = 'Preparese para ser referencia ejemplar en el sector en cuanto a producción, eficiencia y optimización de recursos.';
        
            $sSec6cta = 'Ver más';
        
        $sContactusTitle='<h3 class="lead"><strong>PÓNGASE EN CONTACTO<br>CON VENTAS Y  COTIZACIONES </strong> </h3>';
        $sContactusCta='CONTÁCTANOS';
        }  

    ?>

   <!--SECTION 01-->
    <div class="bg-parallax fullscreen" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php bloginfo('template_directory'); ?>/assets/img/alimentaria-Hero-Bg.png")'>
        <div class="d-flex align-items-center">
            <div class="container">
                <div class=" row">
                    <div class="col-lg-8 mr-auto text-left">
                        <h3 class="text-white h1 font700 text-capitalize mb20">
                            <?php echo $sSection01Title; ?>
                           
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
                    <?php echo $sSection02PA; ?>
                </p>

                <p class="lead">
                   <?php echo $sSection02PB; ?>
                </p>

            </div>

        </div>
    </div>

    <!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    <!--SECTION 03 -->
    <div class=" pt20  bg-faded">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb30">
                    <div class="video-icon-image left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/aguacate-half.png" alt="" class="img-fluid">

                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp mb30" data-wow-delay=".300ms">
                    <div class="mb40">
                         <?php echo $sSection03Title; ?>
                       
                        <!--title-->
                        <div>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-default mb30" role="tablist">
                                
                                  <li class="nav-item" role="presentation"><a class="active nav-link" href="#tab-1" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $sSection03tab1; ?></a></li>
                                
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tab-2" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $sSection03tab2; ?></a></li>
                                
                                  <li class="nav-item" role="presentation"><a class=" nav-link" href="#tab-3" aria-controls="home" role="tab" data-toggle="tab"><?php echo $sSection03tab3; ?></a></li>
                                
                                 <li class="nav-item" role="presentation"><a class="nav-link" href="#tab-4" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $sSection03tab4; ?></a></li>
                                
                                <li class="nav-item" role="presentation"><a class=" nav-link" href="#tab-5" aria-controls="home" role="tab" data-toggle="tab"><?php echo $sSection03tab5; ?></a></li>
                            
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                  <div role="tabpanel" class="tab-pane fade" id="tab-1">
                                    <?php echo $sSection03tabDesc1; ?>
                                </div>
                                
                                <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                    <?php echo $sSection03tabDesc2; ?>
                                </div>
                                
                                 <div role="tabpanel" class="tab-pane fade" id="tab-3">
                                    <?php echo $sSection03tabDesc3; ?>
                                </div>
                                
                                 <div role="tabpanel" class="tab-pane fade" id="tab-4">
                                   
                                    <?php echo $sSection03tabDesc4; ?>
                                </div>
                                
                                <div role="tabpanel" class="tab-pane fade" id="tab-5">
                                    <?php echo $sSection03tabDesc5; ?>
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
                    <?php echo $sSection04Epicore; ?>

                </p>
            </div>

        </div>
    </div>
    
    
        <div class="container pt30 mb50">
        <div class="row align-items-center">
            <div class="col-12  wow fadeInUp" data-wow-delay=".300ms">

                <p class="lead">
                 <?php echo $sSection04Epicore2; ?>
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
                        <?php echo $sContactusTitle; ?>
                        
                    </div>
                    <div class="col-md-4">
                        
                         <!--CHANGE LINK BASED ON ID: CONTACT ID = 17-->
                    <a href="<?php echo get_page_link(17); ?>" class="btn btn-outline-info mb5 " ><i class="fa fa-phone"></i> <?php echo $sContactusCta; ?></a>
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