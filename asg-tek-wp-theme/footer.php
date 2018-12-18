<?php
/**
 * The template for displaying the footer
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
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asg-tek
 */

?>

    <?php

    if(pll_current_language() == 'en') {
            $sAbout='We focus on providing our clients with everything they need to configure customize and implement their Epicor solutions in order to help them maximize their profits.';
            $sLink='Links';
            $sContact='Contact us';
            $sBy='Website designed by';

        } else if(pll_current_language() == 'es') {
            $sAbout=' Nos enfocamos en brindar a nuestros clientes servicios para la configuración de la implementación y la personalización de sus soluciones de Epicor para ayudar a maximizar sus ganancias.';
            $sLink='Ligas';
            $sContact='Contáctanos';
            $sBy='Página web diseñada por';
        }  

    ?>

    <!--FOOTER-->
<hr class="mb40">
    <footer class="footer pt50 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb40">
                    <h3>ASG Tek</h3>
                    <p class="text-dark">
                        <?php echo $sAbout; ?>                         
                    </p>
                   
                </div>
                
                
                    <div class="col-lg-3 col-md-6 mb40">

                        <h3>
                            <?php echo $sLink; ?> 
                        </h3>
                                	<?php
						wp_nav_menu( array(
						
						/*Must be registered with register_nav_menu() in order to be selectable by the user.*/
							'theme_location'	=> 'footer',
		
						/*menu_class: css class to use for the ul element which forms the menu*/
							'menu_class'		=> 'list-unstyled footer-list-item'
						) );
					?>

                    </div>
            
                <div class="col-lg-3 col-md-6 mb40">
                    <h3>
                         <?php echo $sContact; ?>
                    </h3>
                    <ul class="list-unstyled contact-list-item text-dark">
                        <li class="text-dark">
                            <i class="fa fa-home text-dark"></i> San Luis Potosí, México
                        </li>
                        <li class="text-dark">
                            <i class="fa fa-envelope text-dark"></i> ppadilla@asgtek.com 
                        </li>
                        <li class="text-dark">
                            <i class="fa fa-phone text-dark"></i>+1-281-769-20-55
                        </li>
                    </ul>
                </div>
                
                  <div class="col-lg-3 col-md-6 mb40">
                   
                     <img src="<?php bloginfo('template_directory');?>/assets/img/EPICOR-CERTIFIED-PARTNER_Mesa%20de%20trabajo%201.jpg" alt="" class="img-fluid">
                </div>
                
            </div>
            <hr class="mb40">
            <div class="row">
                <div class="col-lg-6  ml-auto mr-auto text-center">

                    <p>&copy; <?php echo $sBy; ?> <a target="_blank" href="http://www.anana.mx/" class="">Ananá Marketing Digital</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
    <!--back to top-->
    <a href="#" class="back-to-top hidden-xs-down" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/asan-plugins.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/assan.custom.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.countTo.js"></script>
    <!--<script src="js/jquery.cubeportfolio.min.js"></script> -->
</body>

</html>