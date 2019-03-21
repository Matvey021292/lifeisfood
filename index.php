<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cooked
 */

get_header();
?>

<style>
	.title-fixed{
		position: fixed;
		transform: rotate(-90deg);
		transform-origin: left top;
		left:0%;
		top: 70%;
		height: auto;
		font-size: 13px;
		background: #ff1744;
		padding: 10px 20px;
		border-radius: 0px 0px 10px 10px;
		box-shadow: 0px 0px 21px -3px rgba(0, 0, 0, 0.62);
		color: #ffffff;
		z-index: 11;
		border: 2px solid #ffffff;
	}
	@media(max-width: 640px){
		.title-fixed{
			font-size: 10px;
		}
	}
	@media(max-width: 370px){
		.title-fixed{
			font-size: 8px;
		}
	}
	.loading {
		background: #fff url(/wp-content/themes/cooked/assets/img/loader.svg) center center no-repeat !important;
	}
</style>
<h1 class="title-fixed" ><?php echo get_bloginfo('title') .' - '. get_bloginfo('description'); ?></h1>
<div class="container mb-5">
	<div class="row mt-5">
		<div class="col-lg-9">
			<div class="tab-content mt-5" id="myTabContent">
				<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div  class=" section-wrap section-wrap-country-2 " >
						<div class="section-wrap-content">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<ins class="adsbygoogle"
							style="display:block"
							data-ad-format="fluid"
							data-ad-layout-key="-fb+5w+4e-db+86"
							data-ad-client="ca-pub-1422844265004757"
							data-ad-slot="7425156155"></ins>
							<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
							</script>

							
							<div class="wrapper-bg st-1 cd-section">

								<div class="row">
									<div class="col-md-12">
										<h3 class="aside-title "><a title="<?php echo get_cat_name($cat) ?>" href="<?php echo get_category_link($cat) ?>">Новые записи</a></h3>
									</div>
								</div>
								<div class="row">
									<?php 
									if (have_posts()) :
										while (have_posts()) : the_post(); ?>
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
																			<?php showListComp(); ?>

																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											<?php endwhile;?>
											<?php endif;
											wp_reset_postdata(); ?>
												<?php if (  $wp_query->max_num_pages > 1 ) : ?>
												<script>
													var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
													var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
													var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
													var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
												</script>
												<div id="true_loadmore">Загрузить ещё</div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
							<div class="row paginations">
								<div class="col-md-12 d-flex justify-content-center">
									<?php the_posts_pagination(); ?>
								</div>
							</div>
						</div>

					</div>
					<div class="col-md-12">
					</div>
				</div>
				<div class="col-lg-3"> 
					<?php get_sidebar();?>
				</div>
			</div>
		</div>
		<?php get_footer();
