<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cooked
 */

get_header();
?>
    <div class="container wrapper-bg-cat">
        <div class="row">
            <div class="col-md-9">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="wrapper-bg st-1 " >
                           <h2 class=" list-group-item collapse-title list-title"><?php esc_html_e( 'К сожалению страницу не найдено', 'cooked' ); ?></h2>
                        </div>
                    </main>
                </div>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>

<?php
get_footer();
