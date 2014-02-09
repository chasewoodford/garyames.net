<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php include ('parts/shared/nav.php') ?>

    <div class="lorem mod">
        <div class="container">

            <p><?php the_field('chapter_number'); ?></p>

            <?php the_content(); ?>

            <ol class="slats">
                <li class="group pagination-row">
                    <h3 class="pagination"><a class="button" href="#">&larr;&nbsp;Previous Article</a></h3>
                    <h3 class="pagination"><a class="button" href="chapter-one.html">All Articles</a></h3>
                    <h3 class="pagination"><a class="button" href="campaign-preparation-report.html">Next Article&nbsp;&rarr;</a></h3>
                </li>
                <li class="group">
                    <h3><a href="../">About <?php echo get_the_author() ; ?></a></h3>
                    <?php if ( get_the_author_meta( 'description' ) ) : ?>
                    <img class="headshot small" src="../wp-content/themes/starkers-master/img/gary-ames.png">
                    <p><?php the_author_meta( 'description' ); ?></p>
                    <?php endif; ?>

                </li>
            </ol>

        </div>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>