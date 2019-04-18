<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Velvet_Suite
 */

get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="row">
                            <?php
                            while (have_posts()) :
                                the_post();
                                ?>
                                <div class="col-md-6">
                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <?php the_post_thumbnail('blog_grid_thumb');
                                        the_title('<h2 class="entry-title "><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                                        ?>
                                        <p>
                                            <i><?php velvet_suite_posted_on(); ?></i>
                                        </p>
                                    </article>
                                </div>
                            <?php
                            endwhile; // End of the loop.
                            ?>
                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
            <div class="col-md-4">
                <?php
                get_sidebar();
                ?>
            </div>
        </div>
    </div>


<?php

get_footer();
