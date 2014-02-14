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

            <?php $chapterNumber = get_post_meta($post->ID, 'chapter_number', true); ?>
            <header>
                <h1><?php echo $chapterNumber; ?> <span><?php echo get_the_title(); ?></span></h1>
            </header>

        </div>

        <?php the_content(); ?>

        <ol class="slats">
            <li class="group pagination-row">

                <?php $prev_post = get_previous_post(true,''); $next_post = get_next_post(true,''); ?>

                <?php if (!empty( $prev_post )): ?>
                <h3 class="pagination">
                    <a class="button" href="<?php echo get_permalink( $prev_post->ID ); ?>" title="<?php echo $prev_post->post_title; ?>">&larr;&nbsp;Previous Article</a>
                </h3>
                <?php endif; ?>

                <?php $the_cat = get_the_category(); $category_name = $the_cat[0]->cat_name; $category_link = get_category_link( $the_cat[0]->cat_ID ); ?>
                <h3 class="pagination"><a class="button" href="<?php echo $category_link; ?>" title="<?php echo $category_name; ?>">All Articles</a></h3>

                <?php if (!empty( $next_post )): ?>
                <h3 class="pagination">
                    <a class="button" href="<?php echo get_permalink( $next_post->ID ); ?>" title="<?php echo $next_post->post_title; ?>">Next Article&nbsp;&rarr;</a>
                </h3>
                <?php endif; ?>

            </li>
            <li class="group">

                <h3><a href="<?php echo get_page_link(7); ?>">About Gary Ames</a></h3>

                <?php if ( get_the_author_meta( 'description' ) ) : ?>
                <img class="headshot small" src="../wp-content/themes/starkers-master/img/gary-ames.png">
                <p><?php the_author_meta( 'description' ); ?></p>
                <?php endif; ?>

            </li>
        </ol>
    </div><!-- Close main content container -->

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>