<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package shannon group
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class() ; ?>>
    <?php get_sidebar();?>
</article><!-- #post-## -->

