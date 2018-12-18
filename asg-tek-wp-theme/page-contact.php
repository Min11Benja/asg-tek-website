<?php

/*
Template Name: Contact
*/

/**
 * The template for displaying in contact page
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
<!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->

 <div class="page-titles-img title-space-lg parallax-overlay bg-parallax" data-jarallax='{"speed": 0.4}' style='background-image: url("<?php bloginfo('template_directory'); ?>/assets/img/contact-bg.jpg");background-position:top center;'>
        <div class="container">
            <div class="row">
                <div class=" col-md-12">
                    <h1 class="text-uppercase">Contáctanos</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="container pt90 pb50">
        <div class="row">
            <div class="col-md-6 mb40">

                <h4 class="text-uppercase">Dirección</h4>
                <p>
                    USA: Houston, TX <br>México: San Luis Potosí 
                </p>
                <br>
                <h4 class="text-uppercase">Horarios</h4>
                <p>
                    Lunes-Vienres: 8:00 am to 6:00 pm<br>
                   
                <br>
                <h4 class="text-uppercase">Correo</h4>
                <p>
                    ppadilla@asgtek.com</p>
                <p>contacto@anana.mx</p>
                <br>
                <h4 class="text-uppercase">Teléfono</h4>
                <p>
                    +1-281-769-20-55</p>
                <br>
                <h4 class="text-uppercase">Redes Sociales</h4>
                <div class="clearfix pt10">
                    <a href="https://www.facebook.com/pg/asgtek" class="social-icon si-border si-facebook" target="_blank">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-facebook"></i>
                    </a>
                  
                    <a href="https://www.linkedin.com/in/asg-tek-7698a9100/" class="social-icon si-border si-linkedin" target="_blank">
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 mb40">
                <h2>¿Tienes alguna pregunta?</h2>
                <p>
                    Suspendisse ut interdum lectus. Integer ac neque faucibus, venenatis nisl quis, pellentesque lacus. Integer et ipsum sit amet dui ultrices hendrerit. 
                </p>
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                <script>
                    hbspt.forms.create({
                        portalId: "4850700",
                        formId: "1fa0a7aa-e484-4ea5-8911-50530cc9938c"
                    });

                </script>


            </div>
        </div>
    </div>

<?php get_footer(); ?>