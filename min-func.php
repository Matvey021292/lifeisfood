<?php
function showTimeCook($elem)
{ ?>
    <span class="info-cook">
      <span class="min-icon">
       <span class="time" data-container="body" data-toggle="popover" data-placement="left" data-content="<?php echo CFS()->get('_time'); ?>">
        <svg width="40" viewBox="0 0 163.47 163.47"><g id="Слой_2" data-name="Слой 2"><g id="OBJECTS"><g id="_Группа_" data-name="&lt;Группа&gt;"><circle id="_Контур_" data-name="&lt;Контур&gt;" class="cls-1" cx="81.73" cy="81.73" r="81.73"/><g id="_Группа_2" data-name="&lt;Группа&gt;"><g id="_Группа_3" data-name="&lt;Группа&gt;"><circle id="_Контур_2" data-name="&lt;Контур&gt;" class="cls-2" cx="81.73" cy="80.99" r="67.85" transform="translate(-33.33 81.52) rotate(-45)"/></g><g id="_Группа_4" data-name="&lt;Группа&gt;"><circle id="_Контур_3" data-name="&lt;Контур&gt;" class="cls-3" cx="81.73" cy="80.99" r="59.97" transform="translate(-33.33 81.52) rotate(-45)"/></g><g id="_Группа_5" data-name="&lt;Группа&gt;"><path id="_Контур_4" data-name="&lt;Контур&gt;" class="cls-4" d="M81.73,26.59a60,60,0,0,1,59.9,57.19c0-.93.07-1.86.07-2.79A60,60,0,0,0,21.76,81c0,.93,0,1.86.08,2.79A60,60,0,0,1,81.73,26.59Z"/></g><g id="_Группа_6" data-name="&lt;Группа&gt;"><rect id="_Контур_5" data-name="&lt;Контур&gt;" class="cls-5" x="93.08" y="75.45" width="6.22" height="43.3" transform="translate(-40.25 89.07) rotate(-41.9)"/></g><g id="_Группа_7" data-name="&lt;Группа&gt;"><rect id="_Контур_6" data-name="&lt;Контур&gt;" class="cls-2" x="37.76" y="86.35" width="45.41" height="3.11" transform="translate(-24.08 22.83) rotate(-17.89)"/></g><path id="_Контур_7" data-name="&lt;Контур&gt;" class="cls-6" d="M122.64,48.29a.67.67,0,0,0-.74-.89l-3.27.57.71.85a.68.68,0,0,1-.09.94L81.74,80.59l.66.8,37.52-30.84a.66.66,0,0,1,.93.09l.63.77Z"/><g id="_Группа_8" data-name="&lt;Группа&gt;"><circle id="_Контур_8" data-name="&lt;Контур&gt;" class="cls-7" cx="81.73" cy="80.99" r="6.92"/></g><g id="_Группа_9" data-name="&lt;Группа&gt;"><circle id="_Контур_9" data-name="&lt;Контур&gt;" class="cls-4" cx="81.73" cy="34.79" r="2.45"/><circle id="_Контур_10" data-name="&lt;Контур&gt;" class="cls-4" cx="81.73" cy="130.18" r="2.45"/><circle id="_Контур_11" data-name="&lt;Контур&gt;" class="cls-4" cx="129.43" cy="82.48" r="2.45"/><circle id="_Контур_12" data-name="&lt;Контур&gt;" class="cls-4" cx="34.04" cy="82.48" r="2.45"/></g></g></g></g></g></svg>
    </span>
</span>
</span>
<?php }

function showHardCook($elem)
{ ?>
    <span class="info-cook">
      <span class="min-icon">
       <span data-container="body" data-toggle="popover" data-placement="top"
       data-content="<?php echo CFS()->get('_hard'); ?>">
       <i class="fas fa-dumbbell" style="color: <?php $elem; ?>"></i>
   </span>
</span>
</span>
<?php }


function showIconCat($numCat)
{
    foreach (get_the_category() as $category) {
        if ($category->category_parent == $numCat) {
        } else { ?>
            <a class='category-img' title="<?php echo $category->name?>" href='<?php echo get_category_link($category); ?>' ?>
                <?php echo do_shortcode(sprintf('[wp_custom_image_category size="thumbnail" alt="life is food" term_id="%s"]', $category->term_id)); ?>
            </a>
        <?php }
    }
}

function showListComp()
{ ?>
    <div class="wrap-collapse-home show">
        <ul class="list-group w-100">
            <?php
            $groupFilds = CFS()->get('_list_group_recipe');
            if(!empty($groupFilds)){
                foreach ($groupFilds as $k => $value) {
                    echo "<h6 class='w-100 title-sm'><span>".$value['_list_group_name']."</span></h6>";
                    foreach ($value['_list'] as $field) { ?>
                     <li class="list-group-item d-flex justify-content-between align-items-center mb-1">
                       <span> <?php echo $field['_ingredients']; ?></span>
                       <span class=""><?php echo $field['_count_ingridien'] .' '. $field['_count_ingridien_name']?></span>
                   </li>

                   <?php
               }
           }
       }else{
        $fields = CFS()->get('_list');
        if ($fields) {
            foreach ($fields as $field) { ?>
              <li class="list-group-item d-flex justify-content-between align-items-center mb-1">
                <span><?php echo $field['_ingredients']; ?></span>
                <span class=""><?php echo $field['_count_ingridien'] . ' ' . $field['_count_ingridien_name']?></span>
            </li>
        <?php }
    }
}
?>
</ul>
</div>
<div class="text-center">
    <hr>
    <a href="<?php the_permalink()?>" type="button" class="text-dark">Прейти к рецепту</a>
</div>
<?php }

function show_post_cat($cat, $num)
{
    ?>
    <div class="wrapper-bg st-1 ">

        <div class="row">
            <div class="col-md-12">
                <h3 class="aside-title "><a
                    href="<?php echo get_category_link($cat) ?>" title="<?php echo get_cat_name($cat) ?>"><?php echo get_cat_name($cat) ?></a></h3>
                </div>
            </div>
            <div class="row">
                <?php $args = array(
                    'posts_per_page' => $num,
                    'cat' => $cat
                );

                if (have_posts()) :
                    query_posts($args);
                    while (have_posts()) : the_post();
                        ?>
                        <div class="col-md-12">
                            <div class="entry entry-content-big entry-small post-27 post type-post status-publish format-standard has-post-thumbnail hentry">
                                <div class="entry-content">
                                    <div class="row align-self-stretch">
                                        <div class="col-md-6">
                                            <div class="entry-thumb">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class='featured-recipe effect-lily loading'>
                                                   <?php if (has_post_thumbnail()) { ?>
                                                    <img title="<?php the_title(); ?>" alt="<?php the_title(); ?>"
                                                    src='<?php echo get_the_post_thumbnail_url() ?>'
                                                    data-src="<?php echo get_the_post_thumbnail_url() ?>"
                                                    class="img-responsive wp-post-image b-lazy">
                                                <?php } else { ?>
                                                    <img title="<?php the_title(); ?>" alt="<?php the_title(); ?>"
                                                    src='/wp-content/themes/cooked/assets/img/wirwar.jpg'
                                                    data-src="/wp-content/themes/cooked/assets/img/wirwar.jpg"
                                                    class="img-responsive wp-post-image b-lazy">
                                                <?php } ?>
                                                <?php showIconCat(13); ?>
                                            </a>
                                        </div>
                                        <div class="button-position-c">
                                            <button class=" button--moema addPost-btn btn btn-outline-primary-dev"><i
                                                class="fas fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="entry-prev d-flex flex-column justify-content-between">
                                                <div>
                                                    <a href="<?php the_permalink() ?>"
                                                       title="<?php trim_title_chars(100, '...'); ?>"> <h3
                                                       class="entry-title"><?php trim_title_chars(100, '...'); ?></h3>
                                                   </a>
                                                   <hr>
                                                   <?php
                                                   ?>
                                                   <span class="info-cook min-icon show-list-btn d-flex
                                                   align-items-center"><span>Список ингредиентов</span><i style="color: #ff1744;"
                                                   class="ml-2
                                                   fas
                                                   fa-caret-down"></i></span>
                                                   <div class="entry-summary">
                                                     <p class="show-content"><?php the_truncated_post(350); ?></p>
                                                 </div>
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
                            <?php showListComp(); ?>
                        </div>
                    </div>
                <?php endwhile;
            endif;
            wp_reset_query(); ?>
        </div>
    </div>
    <?php
}

function show_post($cat, $num)
{
    ?>
    <div class="wrapper-bg st-1 cd-section">

        <div class="row">
            <div class="col-md-12">

                <h3 class="aside-title "><a title="<?php echo get_cat_name($cat) ?>" href="<?php echo get_category_link($cat) ?>"><?php echo get_cat_name($cat) ?></a></h3>
            </div>
        </div>
        <div class="row">
            <?php $args = array(
                'posts_per_page' => $num,
                'cat' => $cat
            );
            if (have_posts()) :
                query_posts($args);
                while (have_posts()) : the_post();
                    ?>
                    <div class="col-md-6">
                        <div class="entry entry-content-min entry-small post-27 post type-post status-publish format-standard has-post-thumbnail hentry">
                            <div class="entry-content ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="entry-thumb entry-thumb-type">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class='featured-recipe effect-lily loading'>
                                             <?php if (has_post_thumbnail()) { ?>

                                                <img 
                                                title="<?php the_title(); ?>" 
                                                alt="<?php the_title(); ?>"
                                                class="b-lazy img-responsive wp-post-image"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(),"medium") ?>.webp"
                                                >
                                            <?php } else { ?>
                                                <img title="<?php the_title(); ?>" alt="<?php the_title(); ?>"
                                                src='/wp-content/themes/cooked/assets/img/wirwar.jpg'
                                                class="img-responsive wp-post-image">
                                            <?php } ?>
                                            
                                            <?php showIconCat(14); ?>
                                        </a>

                                    </div>
                                    <div class="button-position-c">
                                        <button class="button--moema addPost-btn btn btn-outline-primary-dev"><i
                                            class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="entry-prev">
                                            <a href="<?php the_permalink() ?>"
                                               title="<?php trim_title_chars(100, '...'); ?>"><h3
                                               class="entry-title entry-title-min"><?php trim_title_chars(100, '...'); ?></h3>
                                           </a>
                                           <hr>
                                           <?php

                                           ?>
                                           <div class="entry-summary">
                                            <span class="justify-content-end info-cook min-icon show-list-btn d-flex
                                            align-items-center"><span>Список ингредиентов</span><i style="color: #ff1744;"
                                            class="ml-2
                                            fas
                                            fa-caret-down"></i></span>
                                            <!-- <p class="show-content"><?php do_excerpt(get_the_excerpt(), 20); ?></p> -->
                                            <p class="show-content"><?php the_truncated_post(350); ?></p>
                                            <?php showListComp(); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        endif;
        wp_reset_query(); ?>
    </div>
</div>
<?php
}

function show_postAll($cat, $num)
{
    ?>
    <div class="wrapper-bg st-1 ">

        <div class="row">
            <div class="col-md-12">

                <?php if (count(get_cat_name($cat)) > 1) { ?>
                    <h3 class="aside-title "><a title="<?php echo get_cat_name($cat) ?>" href="<?php echo get_category_link($cat) ?>"><?php echo get_cat_name($cat) ?></a></h3>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <?php $args = array(
                'posts_per_page' => $num,
                'cat' => $cat
            );
            if (have_posts()) :
                query_posts($args);
                while (have_posts()) : the_post();
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="entry entry-content-min entry-content-min-all entry-small post-27 post type-post status-publish format-standard has-post-thumbnail hentry">
                            <div class="entry-content ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="entry-thumb entry-thumb-type">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class='featured-recipe effect-lily loading'>
                                                <?php if (has_post_thumbnail()) { ?>
                                                    <img title="<?php the_title(); ?>" alt="<?php the_title(); ?>"
                                                    src='<?php echo get_the_post_thumbnail_url() ?>'
                                                    data-src=""
                                                    class="img-responsive wp-post-image b-lazy">
                                                <?php } else { ?>
                                                    <img title="<?php the_title(); ?>" alt="<?php the_title(); ?>"
                                                    src='/wp-content/themes/cooked/assets/img/wirwar.jpg'
                                                    data-src=""
                                                    class="img-responsive wp-post-image b-lazy">
                                                <?php } ?>

                                            </a>
                                        </div>
                                        <div class="button-position-c">
                                            <button class="button--moema addPost-btn btn btn-outline-primary-dev"><i
                                                class="fas fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="entry-prev">
                                                <a href="<?php the_permalink() ?>"
                                                   title="<?php trim_title_chars(100, '...'); ?>"><h3
                                                   class="entry-title"><?php trim_title_chars(100, '...'); ?></h3>
                                               </a>
                                               <hr>
                                               <?php

                                               ?>
                                               <div class="entry-summary">
                                                <!-- <p class="show-content"><?php do_excerpt(get_the_excerpt(), 20); ?></p> -->
                                                <p class="show-content"><?php the_truncated_post(100); ?></p>
                                            </div>
                                            <!-- <div class="cat-img-wrap">
													<?php showIconCat(14); ?>
													<?php showIconCat(13); ?>
												</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                endif;
                wp_reset_query(); ?>
            </div>
        </div>
        <?php
    }

    function the_services_navigations($cat, $elem = null)
    {
        $cat_data = get_categories(array('parent' => $cat, 'hide_empty' => 0));
        if ($cat_data) {
            $cat_links = '';
            foreach ($cat_data as $one_cat_data) { ?>
                <div class="col-cat <?php if ($elem) echo "col-sm-4 nav-cat"; ?>">
                    <?php
                    if ($elem) { ?>
                        <a class='wrap-car-img loading' title="<?php echo $one_cat_data->cat_name; ?>"  href='<?php echo get_category_link($one_cat_data->term_id); ?>'>
                            <?php
                            if (!do_shortcode(sprintf('[wp_custom_image_category term_id="%s"]', $one_cat_data->term_id))) {
                                echo '<img alt="life is food" title="lifeisfood" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="/wp-content/themes/cooked/assets/img/wirwar.jpg" class="img-responsive wp-post-image  b-lazy" >';
                            }
                            ?>
                            <span class='coun-post'>Количество записей: <?php echo $one_cat_data->category_count; ?></span>
                            <?php echo do_shortcode(sprintf('[wp_custom_image_category title="lifeisfood" alt="life is food"  term_id="%s"]', $one_cat_data->term_id)); ?>
                        </a>
                    <?php } ?>

                    <a class='category-img btn-outline-primary-dev' title="<?php echo $one_cat_data->cat_name; ?>"
                       href='<?php echo get_category_link($one_cat_data->term_id); ?>'>#<?php echo $one_cat_data->cat_name; ?></a>
                   </div>
               <?php }
           }
       }


       function showNewPost()
       { ?>
        <div class="wrapper-bg st-1 wrap-news-post">
            <div class="row">
                <?php
                $args = array(
                    'numberposts' => 8,
                    'offset' => 0,
                    'category' => 0,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'include' => '',
                    'exclude' => '',
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'post_status' => 'draft, publish, future, pending, private',
                    'suppress_filters' => true
                );
                $recent_posts = wp_get_recent_posts($args, ARRAY_A);
                foreach ($recent_posts as $recent) { ?>

                    <div class="col-lg-3 col-md-6">
                        <div class="entry entry-content-min entry-content-min-all entry-small post type-post status-publish format-standard has-post-thumbnail hentry card card-cascade narrower card-ecommerce">
                            <div class="entry-content ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="entry-thumb entry-thumb-type view view-cascade overlay">
                                            <a title="<?php echo $recent["post_title"]; ?>" href="<?php the_permalink($recent["ID"]); ?>"
                                               class='featured-recipe  loading'>
                                               <?php if (has_post_thumbnail($recent["ID"])) { ?>
                                                <img title="<?php echo $recent["post_title"]; ?>" alt="<?php echo $recent["post_title"] ?>"
                                                src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='
                                                data-src="<?php echo get_the_post_thumbnail_url($recent["ID"]) ?>"
                                                class="img-responsive wp-post-image b-lazy">
                                            <?php } else { ?>
                                                <img title="<?php echo $recent["post_title"]; ?>" alt="<?php echo $recent["post_title"] ?>"
                                                src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='
                                                data-src="/wp-content/themes/cooked/assets/img/wirwar.jpg"
                                                class="img-responsive wp-post-image b-lazy">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="card-body card-body-cascade text-center">
                                        <a href="<?php the_permalink($recent["ID"]) ?>" title="<?php echo $recent["post_title"] ?>">
                                            <h4 class=" h-6 entry-title m-0"><?php echo $recent["post_title"] ?></h4>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php wp_reset_query();
?>

<?php }

?>