<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php include ('/parts/shared/nav.php') ?>

<div class="lorem mod">
    <div class="container">

        <?php global $query_string; query_posts($query_string . "&order=ASC"); ?>
        <?php if ( have_posts() ): ?>
        <header>
            <h1>Chapter <span><?php echo single_cat_title( '', false ); ?></span></h1>
        </header>
        <ol class="slats">
            <?php while ( have_posts() ) : the_post(); ?>
            <li>
                <article>
                    <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </article>
            </li>
            <?php endwhile; ?>
        </ol>
        <?php else: ?>
        <h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
        <?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>