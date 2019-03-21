<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cooked
 */


?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="wrap-search">
		<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
		<div class="cat-wrap ">
			<div class="row">
				<hr>
                <h4 class="w-100">Каталог рецептов на каждый день </h4>
				<?php 
                the_services_navigations(14);
                ?>
				<hr>
				<?php 
                the_services_navigations(13);
                ?>
			</div>
            <hr>
            <div>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- реклама -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-1422844265004757"
                     data-ad-slot="4694123057"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
<!--            <div class="like-wrap">-->
<!--                --><?php
//                echo do_shortcode('[rating-system-posts]')
//                ?>
<!--                <ol class="grid">-->
<!--                    <li class="grid__item">-->
<!--                        <button class="icobutton icobutton--thumbs-up thumbs-up"><span-->
<!--                                    class="fa fa-thumbs-up"></span></button>-->
<!--                    </li>-->
<!--                    <li class="grid__item">-->
<!--                        <button class="icobutton icobutton--thumbs-up thumbs-down"><span-->
<!--                                    class="fa fa-thumbs-up"></span></button>-->
<!--                    </li>-->
<!--                </ol>-->
<!--            </div>-->

        </div>
	</div>
</aside><!-- #secondary -->
