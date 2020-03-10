<?php
/**
 * Template Name: Szablon1
 *
 *@package  Wordpress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>

<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<div id="title">

    <h1> Test Strony </h1>

</div>


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

<div class="header">

</div>

<div class="footer">

</div>
