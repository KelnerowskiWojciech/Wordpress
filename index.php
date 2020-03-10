<?php
/**
 * Template Name: Szablon1
 *
 *@package  Wordpress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>

<?php
get_header();
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        the_title( '<h1> Test Strony </h1>');
        the_post_thumbnail( '<article> test artykułu </article>');
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
 
get_footer();

?>
<br>
eeee