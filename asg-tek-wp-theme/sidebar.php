<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asg-tek
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

   <div class="mb40">
                        <!--Search Widget-->          
                        <form action="/" method="get">
                            <div class="input-group">
                                <input type="text" name="s" id="search" class="form-control" placeholder="Buscar..." aria-describedby="basic-addon2" value="<?php the_search_query(); ?>" />
                                
                                <button class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                        
                        <!--Category Widget-->
                    </div><!--/col-->
                    <div class="mb40">
                        <h4 class="sidebar-title">Categorías</h4>
                        <ul class="list-unstyled categories">
                            
                           
                            <?php 
                            $categories = get_categories();
                            foreach($categories as $category) {
                            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                            }
                            ?>
                  
                        </ul>
                    </div><!--/col-->

                    <!--Last Entry-->
                    <div>
                        <h4 class="sidebar-title">Últimas entradas</h4> 
                        <ul class="list-unstyled">
                    <?php 
                       // the query
                       $the_query = new WP_Query( array(
                          'posts_per_page' => 3,
                       )); 
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <li class="media">
                                
                                 <img class="d-flex mr-3 img-fluid" width="64" src="<?php the_post_thumbnail_url(); ?>" alt="Generic placeholder image">
                                
                                 <div class="media-body">
                                    <h5 class="mt-0 mb-1"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                                     <br>
                                   
                                </div>
                      
                            </li>
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                      <p><?php __('Sin entradas'); ?></p>
                    <?php endif; ?>
                        </ul>
                    </div>
                   

              
