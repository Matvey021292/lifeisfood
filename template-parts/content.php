<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cooked
 */

?>


<div class="col-md-12">
    <div class="entry entry-content-min entry-small post-27 post type-post status-publish format-standard has-post-thumbnail hentry">
        <div class="entry-content ">
            <div class="row">
                <div class="col-md-6">
                    <div class="entry-thumb ">
                        <a href="<?php the_permalink(); ?>" class='featured-recipe effect-lily'>
                            <?php if (has_post_thumbnail()) { ?>
                                <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url() ?>"
                                     class="img-responsive wp-post-image" alt="">
                            <?php } else { ?>
                                <img alt="<?php the_title(); ?>" src="/wp-content/themes/cooked/assets/img/wirwar.jpg"
                                     class="img-responsive wp-post-image" alt="">
                            <?php } ?>
                            <?php
                            if (is_category()) {
                                $q_cat = get_query_var('cat');
                                $cat = get_category($q_cat);
                            }
                            ?>
                            <?php showIconCat($cat->category_parent); ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="entry-prev">
                        <a href="<?php the_permalink() ?>" title="<?php trim_title_chars(100, '...'); ?>"><h3
                                    class="entry-title"><?php trim_title_chars(100, '...'); ?></h3></a>
                        <hr>
                        <?php

                        ?>
                        <span class="info-cook min-icon show-list-btn d-flex align-items-center"><span>Список
                                        ингредиентов</span><i
                                    style="color: #ff1744;"
                                    class="ml-2 fas fa-caret-down"></i></span>
                        <div class="entry-summary">
                            <p class="show-content"><?php the_truncated_post(350); ?></p>
                            <?php showListComp(); ?>
                        </div>
                        <div class="d-flex justify-content-end ">
                            <div class="wrap-info">
                                <?php showTimeCook('#fff'); ?>
                                <?php if (function_exists('wpfp_link')) {
                                    wpfp_link();
                                } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

