<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package shannon group
 */

get_header(); ?>

	<div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                
                <?php layerslider(1) ?>
                
		
               <div class="static_images">
                <?php 
                    $array = wp_get_attachment_image_src(1731, 'full');
                    //echo $array[0];
                    echo '<div class="static_images_item static_img1">
                            <a href="' . get_page_link(1828) .'">
                                <img src="' . $array[0] . '" />
                            </a>
                            <a href="' . get_page_link(1828) .'">
                                <p>Our Projects</p>
                            </a>
                          </div>';
                    $array = wp_get_attachment_image_src(1732, 'full');
                    //echo $array[0];
                    echo '<div class="static_images_item static_img2">
                            <a href="' . get_page_link(1830) .'">
                                <img src="' . $array[0] . '" />
                            </a>
                            <a href="' . get_page_link(1830) .'">
                                <p>Our People</p>
                            </a>
                          </div>';
                    $array = wp_get_attachment_image_src(1733, 'full');
                    //echo $array[0];
                    echo '<div class="static_images_item static_img3">
                            <a href="' . get_page_link(1832) .'">
                                <img src="' . $array[0] . '" />
                            </a>
                            <a href="' . get_page_link(1832) .'">
                                <p>Helpful Tips</p>
                            </a>
                          </div>';
                    $array = wp_get_attachment_image_src(1734, 'full');
                    //echo $array[0];
                    echo '<div class="static_images_item static_img4">
                            <a href="' . get_page_link(1834) .'">
                                <img src="' . $array[0] . '" />
                            </a>
                            <a href="' . get_page_link(1834) .'">
                                <p>Industry News</p>
                            </a>
                          </div>';
                ?>
                </div>
                <div class="operations_and_news">  
                   <div class="operations">
                       <h1>Operations</h1>
                       <p>Two before narrow not relied how except moment 
                           myself. Dejection assurance mrs led certainly. 
                           So gate at no only none open. Betrayed at properly 
                           it of graceful on.
                        </p>
                   </div>
                
                   
                   <div class="news">
                       <h1>News</h1>
                       <ul>

                        <?php 
                            $total_post = 2;
                            $the_query = new WP_Query( array(
                                'posts_per_page'   => $total_post)); 
                            $current = 0;
                        ?>


                        <?php while ($the_query -> have_posts()) : 
                            $the_query -> the_post(); 
                            
                            //if($current != $total_post - 1): 
                        ?>
                                <li>
                                    <p><?php echo get_post_time('d F Y', true);?></p>
                                    <a href="<?php the_permalink() ?>">
                                        <?php  
                                            $post_title = the_title('','',false);
                                            $max_length = 51;
                                            
                                            if(strlen($post_title) > $max_length){
                                                echo substr($post_title, 0, $max_length) . '...';
                                            }
                                            else{
                                                echo $post_title;
                                            }
                                        ?>
                                    </a>
                                </li>
                            
                            
                        <?php

                        endwhile;

                        wp_reset_postdata();

                        ?>

                    </ul>

                   </div>
                   
                </div>

            </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
