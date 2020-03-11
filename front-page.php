<?php

get_header();

//the_title('Testowa Strona');

?>

<html>

    <h1> Tytuł Strony </h1>

    <article> Treść Strony </article>

    <article> 
    <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </article>

</html>

<?php

get_footer();

?>
