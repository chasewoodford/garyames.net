<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php include ('parts/shared/nav.php') ?>

    <div class="lorem mod">
        <div class="container">

            <?php query_posts("order=ASC&cat=2"); ?>
            <?php if ( have_posts() ): ?>

                <!-- Add counter to posts -->
                <?php $count = 0; while ( have_posts() ) : the_post(); $count++; ?>

                    <!-- If first post, put chapter number, category and description above post -->
                    <?php if ($count == 1) :
                        $chapterNumber = get_post_meta($post->ID, 'chapter_number', true);
                        $categories = get_the_category(); $category_id = $categories[0]->cat_ID;
                        ?>

                        <header>
                            <h1><?php echo $chapterNumber; ?> <span><?php echo single_cat_title( '', false ); ?></span></h1>
                        </header>

                        <?php echo category_description( $category_id ); ?>

                        <ol class="slats">
                        <li>
                            <article>
                                <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <?php the_excerpt(); ?>
                            </article>
                        </li>

                    <!-- For each post after the first, only show the title and excerpt -->
                    <?php else : ?>

                        <li>
                            <article>
                                <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <?php the_excerpt(); ?>
                            </article>
                        </li>
                    <?php endif; ?>

                <?php endwhile; ?>

                </ol>

            <!-- If there are no posts in the category for some reason... -->
            <?php else: ?>
                <h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
            <?php endif; ?>

        </div><!-- Close container -->
    </div><!-- Close main content container -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>