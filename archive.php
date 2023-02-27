<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trucontain
 */

get_header();
?>

    <main id="primary" class="site-main __container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
        <?php if (have_posts()) : ?>

            <header class="page-header">
                <?php
                _e('<h1>Latest from Our Blog</h1>', 'trucontain');
                //            the_archive_title('<h1 class="page-title">', '</h1>');
                //            the_archive_description('<div class="archive-description">', '</div>');
                ?>
            </header><!-- .page-header -->

            <div class="articles-wrapper">
                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    //get_template_part('template-parts/content', get_post_type());

                    ?>
                    <article class="posts-loop">
                        <?php if (trucontain_post_thumbnail()) {
                            trucontain_post_thumbnail();
                            ?>
                        <?php } ?>
                        <!--                    <h2 class="posts-loop__title"><a href="-->
                        <?php //echo get_the_permalink();
                        ?><!--">--><?php //echo get_the_title();
                        ?><!--</a></h2>-->
                        <h2 class="posts-loop__title"><a
                                    href="<?php echo get_the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 6) ?></a>
                        </h2>
                        <div class="posts-loop__content">
                            <?php echo wp_trim_words(get_the_content(), 20); ?>
                        </div>
                        <a href="<?php echo get_the_permalink(); ?>"
                           class="btn"><?php _e('Read More', 'trucontain'); ?></a>
                    </article>
                <?php
                endwhile;

                //            the_posts_navigation();
                ?>
            </div>
            <div class="wp-pagination">
                <?php
                if (paginate_links()) {
                    echo paginate_links();
                } ?>
            </div>
        <?php
        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
