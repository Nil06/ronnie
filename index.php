<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and is used to display a page when nothing more specific matches a query.
 *
 * @package ronnie
 */
?>

<?php get_header(); ?>

<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
            </article>
            <?php
        endwhile;
    else :
        echo '<p>Aucun article trouvé.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
