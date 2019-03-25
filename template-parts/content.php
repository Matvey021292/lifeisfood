<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cooked
 */

?>

<?php $title = get_the_title(); ?>
<div class="col-md-6 mb-2">
    <div class="card card-cascade narrower card-ecommerce entry">
        <div class="entry-content ">
            <div class="view view-cascade overlay entry-thumb entry-thumb-type">
                <img 
                title="<?= $title; ?>" 
                alt="<?= $title; ?>"
                src="<?php echo get_the_post_thumbnail_url(get_the_ID(),"medium") ?>.webp" 
                class="card-img-top  b-lazy img-responsive wp-post-image b-loaded" >
                <a class="" href="<?php the_permalink() ?>">
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
                <?php showIconCat(14); ?>
            </div>
            <div class="card-body card-body-cascade text-center entry-prev">
                <div class="article-cat">
                    <?php echo getPostCat($post->ID);?>
                </div>
                <?php  get_the_category($post->ID);?>
                <h3 class="card-title mb-2 h3 entry-title entry-title-min">
                    <a  class="entry-title entry-title-min"
                    href="<?php the_permalink() ?>"
                    title="<?= $title; ?>">
                    <?php rtrim(trim_title_chars(100, '...')); ?>
                </a>
            </h3>

            <div  class="card-text entry-summary text-center"> <a class="" data-toggle="collapse" href="#collapseExample<?php echo $post->ID?>" aria-expanded="false" aria-controls="collapseExample<?php echo $post->ID?>">
                Список ингредиентов <i class="ml-2 fas fa-caret-down"></i>
            </a> </div>
            <div class="collapse" id="collapseExample<?php echo $post->ID?>">
                <?php showListComp(); ?>
            </div>
            <div class="card-footer px-1">
                <a class="float-left  addPost-btn" href='#'><i class="fas fa-bookmark"></i>  Добавить в закладки</a>

                <span class="float-right">
                    <?php $post_meta = get_post_meta ($post->ID,'views',true); $rand = rand(1,1000);?>
                    <a class="mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo ($post_meta) ? $post_meta : $rand ?>">
                        <span><?php echo ($post_meta) ? $post_meta : $rand; ?></span>
                        <i class="fas fa-eye ml-1"></i>
                    </a>
                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo CFS()->get('_time'); ?>">
                        <span><?php echo CFS()->get('_time'); ?></span>
                        <i class="fas fa-clock ml-1"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>
</div>

