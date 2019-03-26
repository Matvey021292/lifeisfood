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

	get_header(); ?>
	<h1 class="title-fixed" ><?php echo get_bloginfo('title') .' - '. get_bloginfo('description'); ?></h1>
	<div class="container mb-5">
		<div class="row mt-5 main-content ">
			<div class="col-lg-9 content">
				<div class="tab-content" id="myTabContent">
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
											<h3 class="aside-title "><a  href="/">Новые записи</a></h3>
										</div>
									</div>
									<div class="row ">
										<?php 
										if (have_posts()) :
											while (have_posts()) : the_post(); ?>
												<?php 	get_template_part( 'template-parts/content', get_post_type() ); ?>
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
											<div class="btn_more_wrap col-md-12 d-flex mb-3 justify-content-center">
												<a href="#" id="true_loadmore">Загрузить ещё</a>
											</div>
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
			</div>
			<div class="col-lg-3 sidebar p-0"> 
				<div class="sidebar__inner">
					<?php get_sidebar();?>	
				</div>
			</div>
		</div>

	</div>
</div>
<?php get_footer();
