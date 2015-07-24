<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package shannon group
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class() ; ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title haha">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shannon-group' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->
        
</article><!-- #post-## -->

