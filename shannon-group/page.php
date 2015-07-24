<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package shannon group
 */

get_header(); ?>

	<div id="primary" class="content-area my_page_content_container">
            <main id="main" class="site-main my_page_content" role="main">
                <div class="grid-wrapper">
                    <?php  
                        $pid = get_the_ID();
                        //echo $pid;
                        if($pid != 1774):
                    ?> 
                            <div class="grid grid-16-11">
                                <?php while ( have_posts() ) : the_post(); ?>

                                    <?php get_template_part( 'template-parts/content', 'page' ); ?>

                                <?php endwhile; // End of the loop. ?>

                            </div>

                    <?php 
                        else:
                    ?>
                            <div class="grid grid-16-11">
                                <div id="secondary" class="widget-area" role="complementary">
                                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                                        <div class="my_sidebar_item hah">
                                           <h1>News</h1>
                                           <ul>

                                            <?php 
                                                $total_post = 10;
                                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                                $args = array(
                                                    'posts_per_page' => $total_post,
                                                    'paged'=>$paged
                                                );
                                                $the_query = new WP_Query($args); 
                                                
                                                
                                            ?>

                                            <?php while ($the_query -> have_posts()) : 
                                                $the_query -> the_post(); 
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
                                                        
                                                        <p class="my_post_excerpt">
                                                            <?php echo get_the_excerpt(); ?>
                                                        </p>
                                                        
                                                        <a href="<?php the_permalink() ?>" 
                                                           class="read_more">
                                                            Read More
                                                        </a>
                                                    </li>

                                            <?php

                                            endwhile;
                                         
                                            $GLOBALS['wp_query']->max_num_pages 
                                                    = $the_query->max_num_pages;
                                            the_posts_pagination( array(
                                               'prev_text' => __( 'Prev'),
                                               'next_text' => __( 'Next'),
                                               'screen_reader_text' => __( 'Posts navigation' )
                                            ) ); 
                                            
                                            wp_reset_postdata();

                                            ?>

                                        </ul>  
                                   </div>
                                </div><!-- #secondary -->
                            </div>
                            
                    <?php endif; ?>
                    
                    <div class="grid grid-16-1 empty_space">
                            space
                    </div>

                    <div class="grid grid-16-4">
                        
                        <div id="secondary" class="widget-area" role="complementary">
                            <?php dynamic_sidebar( 'sidebar-1' ); ?>
                                <div class="my_sidebar_item">
                                   <h1>News</h1>
                                   <ul>

                                    <?php 
                                        $total_post = 5;
                                        $the_query = new WP_Query( array(
                                            'posts_per_page'   => $total_post)); 
                                        
                                    ?>

                                    <?php while ($the_query -> have_posts()) : 
                                        $the_query -> the_post(); 
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
                        </div><!-- #secondary -->


                        
                    </div>
                </div>
                
            </main><!-- #main -->
            
	</div><!-- #primary -->
        
<?php get_footer(); ?>
