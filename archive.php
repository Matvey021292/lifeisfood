<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
						<?php if ( have_posts() ) : ?>
							<div class="row">
								<div class="col-md-12">
									<?php
									the_archive_title( '<h3 class="aside-title " ><span>', '</span></h3>' );
									the_archive_description( '<div class="archive-description">', '</div>' );
									?>
								</div>
							</div>
							<div class="row">
								<?php
								while ( have_posts() ) :
									the_post();
									get_template_part( 'template-parts/content', get_post_type() ); ?>
								<?php	endwhile; ?>
							</div>
							<div class="row paginations">
								<div class="col-md-12 d-flex justify-content-center mb-3">
									<?php the_posts_pagination();?>
								</div>
							</div>
							<?php 		
							else :?>
								<h2 class=" list-group-item collapse-title list-title"><?php esc_html_e( 'К сожалению страницу не найдено', 'cooked' ); ?></h2>
							<?php endif;
							?>
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
