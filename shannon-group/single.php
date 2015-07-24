<?php
/**
 * The template for displaying all single posts.
 *
 * @package shannon group
 */

get_header(); ?>
        <div id="primary" class="content-area my_page_content_container">
            <main id="main" class="site-main my_page_content" role="main">

                <div class="grid-wrapper">
                    <div class="grid grid-16-11">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'template-parts/content', 'single' ); ?>

                        <?php endwhile; // End of the loop. ?>

                        <?php //echo do_shortcode("[contact-form-7 id='1758' title='Label Form']"); ?>
                    </div>

                    <div class="grid grid-16-1 empty_space">
                        space
                    </div>

                    <div class="grid grid-16-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
                
            </main><!-- #main -->
            
	</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
