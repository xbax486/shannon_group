
<div id="secondary" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <div class="my_sidebar_item">
           <h1>News</h1>
           <ul>

            <?php 
                $total_post = 5;
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
</div><!-- #secondary -->
