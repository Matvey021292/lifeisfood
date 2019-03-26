<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cooked
 */

get_header();
?>
<?php
$str = CFS()->get('_time');
$str = preg_replace("/[^0-9]/", '', $str);
?>
<script type="application/ld+json">
	{
		"@context": "http://schema.org/",
		"@type": "Recipe",
		"name": "<?php the_title(); ?>",
		"author": "Matvey",
		"image": "<?php echo get_the_post_thumbnail_url() ?>",
		"description": "<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true);  ?>",
		"keywords":"<?php foreach (CFS()->get('_list') as $k){ echo $k['_ingredients'].", ";}?>",
		"recipeCategory":"<?php  foreach (get_the_category() as $v){ if ($v->category_parent == 14) {echo $v->name .' ';}} ?>",
		"recipeCuisine":"<?php  foreach (get_the_category() as $v){ if ($v->category_parent == 13) {echo $v->name .' ';}} ?>",
		"prepTime": "<?php echo $str; ?>",
		"totalTime": "<?php echo $str ?>",
		"recipeYield": "<?php echo CFS()->get('_count'); ?>",
		"recipeIngredient": [
		<?php
		$fields = CFS()->get('_list');
		$i = 0;
		foreach ($fields as $field) {
			$i++;
			if ($i < count($fields)) { ?>
				"<?php echo $field['_ingredients'] . " " . $field['_count_ingridien'] . $field['_count_ingridien_name']; ?>",
			<?php } else { ?>
				"<?php echo $field['_ingredients'] . " " . $field['_count_ingridien'] . $field['_count_ingridien_name']; ?>"
			<?php }
		} ?>
		],
		"recipeInstructions": [
		<?php $fields_step = CFS()->get('_step');
		$j = 0;
		foreach ($fields_step as $field_step) {
			$j++;
			if ($j < count($fields_step)) { ?>
				"<?php echo $field_step['_desc_step']; ?>",
			<?php } else { ?>
				"<?php echo $field_step['_desc_step']; ?>"
			<?php }
		} ?>
		]
	}


</script>
<div class="container wrapper-bg-cat wrapper-bg-cat-min single-page" id="single-page">
	<div class="row">
		<div class="col-md-9">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<div class="wrapper-bg st-1 entry-content">
						<?php
						while (have_posts()) :
							the_post(); ?>
							<h1 id="single-title" class="aside-title-single entry-title aside-title
							lh-1entry-title"><?php
							the_title(); ?></h1>
							<a class="featured-recipe" href="<?php echo get_permalink() ?>"></a>
							<?php
							if (has_post_thumbnail()) { ?>
								<div class="entry-thumb entry-thumb-single ">
									<img id="single-image" alt="<?php the_title(); ?>" src="<?php echo
									get_the_post_thumbnail_url() ?>" class="img-responsive wp-post-image">
									
								</div>
							<?php } else { ?>
								<div class="entry-thumb entry-thumb-single ">
									<img id="single-image" alt="<?php the_title(); ?>"
									src="/wp-content/themes/cooked/assets/img/wirwar.png"
									class="img-responsive wp-post-image">
									<span class="addPost-btn min-icon"><i class="fas fa-plus"></i></span>
								</div>
							<?php } ?>
							<hr>
							<div class='wrap-calories wrap-calories-dev mb-3'>
								<ul>
									<li class=""><span class="times"><svg width="40" viewBox="0 0 163.47 163.47"><g
										id="Слой_2" data-name="Слой 2"><g id="OBJECTS"><g id="_Группа_"
											data-name="&lt;Группа&gt;"><circle
											id="_Контур_" data-name="&lt;Контур&gt;"
											class="cls-1" cx="81.73" cy="81.73" r="81.73"/><g
											id="_Группа_2" data-name="&lt;Группа&gt;"><g
											id="_Группа_3" data-name="&lt;Группа&gt;"><circle
											id="_Контур_2" data-name="&lt;Контур&gt;"
											class="cls-2" cx="81.73" cy="80.99"
											r="67.85"
											transform="translate(-33.33 81.52) rotate(-45)"/></g><g
											id="_Группа_4" data-name="&lt;Группа&gt;"><circle
											id="_Контур_3" data-name="&lt;Контур&gt;"
											class="cls-3" cx="81.73" cy="80.99"
											r="59.97"
											transform="translate(-33.33 81.52) rotate(-45)"/></g><g
											id="_Группа_5" data-name="&lt;Группа&gt;"><path
											id="_Контур_4" data-name="&lt;Контур&gt;"
											class="cls-4"
											d="M81.73,26.59a60,60,0,0,1,59.9,57.19c0-.93.07-1.86.07-2.79A60,60,0,0,0,21.76,81c0,.93,0,1.86.08,2.79A60,60,0,0,1,81.73,26.59Z"/></g><g
											id="_Группа_6" data-name="&lt;Группа&gt;"><rect
											id="_Контур_5" data-name="&lt;Контур&gt;"
											class="cls-5" x="93.08" y="75.45"
											width="6.22" height="43.3"
											transform="translate(-40.25 89.07) rotate(-41.9)"/></g><g
											id="_Группа_7" data-name="&lt;Группа&gt;"><rect
											id="_Контур_6" data-name="&lt;Контур&gt;"
											class="cls-2" x="37.76" y="86.35"
											width="45.41" height="3.11"
											transform="translate(-24.08 22.83) rotate(-17.89)"/></g><path
											id="_Контур_7" data-name="&lt;Контур&gt;"
											class="cls-6"
											d="M122.64,48.29a.67.67,0,0,0-.74-.89l-3.27.57.71.85a.68.68,0,0,1-.09.94L81.74,80.59l.66.8,37.52-30.84a.66.66,0,0,1,.93.09l.63.77Z"/><g
											id="_Группа_8" data-name="&lt;Группа&gt;"><circle
											id="_Контур_8" data-name="&lt;Контур&gt;"
											class="cls-7" cx="81.73" cy="80.99"
											r="6.92"/></g><g id="_Группа_9"
											data-name="&lt;Группа&gt;"><circle
											id="_Контур_9" data-name="&lt;Контур&gt;"
											class="cls-4" cx="81.73" cy="34.79"
											r="2.45"/><circle id="_Контур_10"
											data-name="&lt;Контур&gt;"
											class="cls-4" cx="81.73"
											cy="130.18" r="2.45"/><circle
											id="_Контур_11" data-name="&lt;Контур&gt;"
											class="cls-4" cx="129.43" cy="82.48"
											r="2.45"/><circle id="_Контур_12"
											data-name="&lt;Контур&gt;"
											class="cls-4" cx="34.04"
											cy="82.48" r="2.45"/></g></g></g></g></g></svg>
											</span><span><span class='info-desc'>Время приготовления:</span><?php echo CFS()->get('_time');
											?></span></li>
											<li class=""><span class="people_count"><svg width="50"
												viewBox="0 0 115.04 89.21"><g
												id="Слой_2" data-name="Слой 2"><g id="OBJECTS"><path
													class="cls-1"
													d="M91.85,24.55a23.84,23.84,0,0,0-2.41.13,33,33,0,0,0-63.84,0,23.84,23.84,0,0,0-2.41-.13,23.2,23.2,0,0,0,0,46.39V84.82s.1,4.39,7.9,4.39H84c7.8,0,7.9-4.39,7.9-4.39V70.94a23.2,23.2,0,0,0,0-46.39Z"/><path
													class="cls-2"
													d="M75.67,45.83A18.23,18.23,0,0,0,71.26,58l.8,31.16H67.63L68.43,58A18.23,18.23,0,0,0,64,45.83c-2.43-2.87-4-7.48-4-12.68,0-8.7,4.39-15.76,9.82-15.76s9.83,7.06,9.83,15.76C79.67,38.35,78.1,43,75.67,45.83Z"/><path
													class="cls-2"
													d="M51.34,18.63v22.6a8,8,0,0,1-2.5,5.8,13.09,13.09,0,0,0-4.09,9.86l.81,32.31H41.14L42,56.89A13,13,0,0,0,37.86,47a8,8,0,0,1-2.5-5.8V18.63a1.24,1.24,0,0,1,1.27-1.24,1.27,1.27,0,0,1,1.19,1.28V36.22a1,1,0,1,0,2,0V18.63a1.24,1.24,0,0,1,1.27-1.24,1.26,1.26,0,0,1,1.18,1.28V36.22a1,1,0,1,0,2.06,0V18.63a1.24,1.24,0,0,1,1.26-1.24,1.27,1.27,0,0,1,1.19,1.28V36.22a1,1,0,1,0,2.05,0V18.67a1.27,1.27,0,0,1,1.19-1.28A1.24,1.24,0,0,1,51.34,18.63Z"/><path
													class="cls-3"
													d="M80,50.18a18.23,18.23,0,0,0-4.41,12.21L76.3,89.2H72.08l.7-26.81a17.74,17.74,0,0,0-1.35-7.15,18.38,18.38,0,0,1,4.24-9.41c2.43-2.87,4-7.48,4-12.68A21.56,21.56,0,0,0,77,22.42c4,1.95,7,8,7,15.08C84,42.7,82.45,47.31,80,50.18Z"/><path
													class="cls-3"
													d="M44.38,36.22V22.41a1.18,1.18,0,0,0-.16.56V36.73A1,1,0,0,0,44.38,36.22Z"/><path
													class="cls-3"
													d="M48.89,36.22V22.41a1.18,1.18,0,0,0-.16.56V36.73A1,1,0,0,0,48.89,36.22Z"/><path
													class="cls-3"
													d="M39.87,36.22V22.41a1.17,1.17,0,0,0-.15.56V36.73A1,1,0,0,0,39.87,36.22Z"/><path
													class="cls-3"
													d="M55.69,23v22.6a8,8,0,0,1-2.5,5.8,13.09,13.09,0,0,0-4.09,9.86l.71,28H45.6l.7-28a13.1,13.1,0,0,0-1.44-6.32,13.09,13.09,0,0,1,4-7.89,8,8,0,0,0,2.5-5.8v-.15a1,1,0,0,0,.86.52,1,1,0,0,0,1-1V23a1.27,1.27,0,0,1,1.19-1.28A1.24,1.24,0,0,1,55.69,23Z"/></g></g></svg></span><span
													class=''><span
													class="info-desc">Количество порций:</span><?php echo CFS()->get('_count'); ?></span>
												</li>
												<li class=""><span class="hards"><svg width="40" xmlns="http://www.w3.org/2000/svg"
													viewBox="0 0 89.21 89.21"><g
													id="Слой_2" data-name="Слой 2"><g id="OBJECTS"><circle
														class="cls-1" cx="44.6" cy="44.6" r="44.6"
														transform="translate(-6.65 81.37) rotate(-80.65)"/><path
														class="cls-2"
														d="M51.74,40.08V60.27a7.08,7.08,0,0,1-2.24,5.18,11.75,11.75,0,0,0-3.65,8.81l.38,14.92c-.54,0-1.08,0-1.63,0s-1.08,0-1.62,0l.38-14.92a11.75,11.75,0,0,0-3.65-8.81,7.07,7.07,0,0,1-2.23-5.18V40.08A1.1,1.1,0,0,1,38.6,39a1.13,1.13,0,0,1,1.06,1.15V55.8a.92.92,0,0,0,1.84,0V40.08A1.1,1.1,0,0,1,42.63,39a1.14,1.14,0,0,1,1.06,1.15V55.8a.92.92,0,1,0,1.83,0V40.08A1.1,1.1,0,0,1,46.65,39a1.13,1.13,0,0,1,1.06,1.15V55.8a.92.92,0,1,0,1.84,0V40.13A1.13,1.13,0,0,1,50.61,39,1.1,1.1,0,0,1,51.74,40.08Z"/><path
														class="cls-2"
														d="M55.64,16.73a6.85,6.85,0,0,0-.79,0,10.58,10.58,0,0,0-20.49,0,6.85,6.85,0,0,0-.79,0,7.46,7.46,0,0,0,0,14.91V36.1s0,1.41,2.54,1.41,3.32-1.41,8.49-1.41,6,1.41,8.5,1.41,2.54-1.41,2.54-1.41V31.64a7.46,7.46,0,0,0,0-14.91ZM34,19.31a7.87,7.87,0,0,0-5.64,7.55c0,.17,0,.33,0,.49a6.07,6.07,0,0,1,5.18-9.24,4.38,4.38,0,0,1,.52,0C34.05,18.53,34,18.91,34,19.31ZM41.5,34.05a.92.92,0,0,1-1.84,0V31a.92.92,0,0,1,1.84,0Zm4-1.49a.92.92,0,1,1-1.83,0v-3.1a.92.92,0,1,1,1.83,0ZM36.91,22.45a11.55,11.55,0,0,0,.16,1.78A8.93,8.93,0,0,1,49.4,11.9a10.43,10.43,0,0,0-1.78-.16A10.71,10.71,0,0,0,36.91,22.45Zm12.64,11.6a.92.92,0,1,1-1.84,0V31a.92.92,0,1,1,1.84,0Z"/><path
														class="cls-3"
														d="M43.69,55.8a.91.91,0,0,0,1.71.43V41.84a1.13,1.13,0,0,0-1.06-1.15,1.1,1.1,0,0,0-.65.22Z"/><path
														class="cls-3"
														d="M47.71,55.8a.91.91,0,0,0,1.71.44V41.84a1.07,1.07,0,0,0-1.71-.93Z"/><path
														class="cls-3"
														d="M53.45,41.79V62a7.08,7.08,0,0,1-2.24,5.18A11.72,11.72,0,0,0,47.56,76l.32,13.11c-.55,0-1.1.07-1.65.08l-.39-14.9a11.81,11.81,0,0,1,3.66-8.82,7,7,0,0,0,2.23-5.19V40.92a1,1,0,0,1,.6-.23A1.11,1.11,0,0,1,53.45,41.79Z"/><path
														class="cls-3"
														d="M39.66,55.8a.91.91,0,0,0,1.72.43V41.84a1.14,1.14,0,0,0-1.07-1.15,1.15,1.15,0,0,0-.65.22Z"/><path
														class="cls-3"
														d="M42.27,13.18a10.68,10.68,0,0,1,5.35-1.44,10.43,10.43,0,0,1,1.78.16,8.93,8.93,0,0,0-3.71-1.33,10.61,10.61,0,0,0-9.62,7.91l-.35,0c0,.32,0,.65,0,1,0,.14,0,.28,0,.42h.11c0,.25,0,.5-.06.76a9,9,0,0,0,1.32,3.61,11.55,11.55,0,0,1-.16-1.78,10.65,10.65,0,0,1,1.44-5.35A9,9,0,0,1,42.27,13.18Z"/><path
														class="cls-3"
														d="M40.58,30a.92.92,0,0,0-.92.92v3.1a.92.92,0,0,0,.92.92.89.89,0,0,0,.79-.48V32.66a.94.94,0,0,1,.13-.44V31A.92.92,0,0,0,40.58,30Z"/><path
														class="cls-3"
														d="M44.6,28.54a.92.92,0,0,0-.91.92v3.1A.91.91,0,0,0,45.4,33V31.17a1,1,0,0,1,.12-.44V29.46A.92.92,0,0,0,44.6,28.54Z"/><path
														class="cls-3"
														d="M54.85,16.77a6.85,6.85,0,0,1,.79,0h.3a10.54,10.54,0,0,0-3.06-3.9A10.55,10.55,0,0,1,54.85,16.77Z"/><path
														class="cls-3"
														d="M61.69,19.84a7.45,7.45,0,0,1-6,11.8V36.1s0,1.41-2.54,1.41-3.32-1.41-8.5-1.41c-.54,0-1,0-1.48,0a.92.92,0,0,1-.83.53.89.89,0,0,1-.72-.38c-2.62.39-3.55,1.21-5.46,1.21a5.13,5.13,0,0,1-.83-.06v.36s0,1.41,2.54,1.41,3.32-1.41,8.5-1.41,6,1.41,8.49,1.41,2.54-1.41,2.54-1.41V33.35a7.45,7.45,0,0,0,4.34-13.51Z"/><path
														class="cls-3"
														d="M28.37,26.86A7.87,7.87,0,0,1,34,19.31c0-.26,0-.51.06-.76a7.44,7.44,0,0,0-6.24,7.34c0,.09,0,.17,0,.26a7.25,7.25,0,0,0,.55,1.2C28.38,27.19,28.37,27,28.37,26.86Z"/><path
														class="cls-3"
														d="M33.57,31.64a7.4,7.4,0,0,1-4.34-1.41,7.43,7.43,0,0,0,4.34,2.91Z"/><path
														class="cls-3"
														d="M48.63,35a.89.89,0,0,0,.79-.48V32.66a.94.94,0,0,1,.13-.44V31a.92.92,0,1,0-1.84,0v3.1A.92.92,0,0,0,48.63,35Z"/></g></g></svg></span><span
														class=''><span class="info-desc">Сложность приготоваления:</span>
														<?php echo CFS()->get('_hard'); ?></span></li>
														<li class=""><span></span><span class=''></span></li>
													</ul>
												</div>
												<hr>
												<div id="desc" class="single-content cd-section mb-5">
													<h2 class='list-title '>Описание</h2>
													<hr>
													<?php the_content(); ?></div>
													<?php include 'custom-folder/custom-ingredient-collapse.php'; ?>
													<br>
													<a id="step"
													class="list-group-item d-flex justify-content-between list-group-item-action align-items-center collapse-st"
													data-toggle="collapse" href="#collapse_steep" role="button" aria-expanded="false"
													aria-controls="collapse_steep">
													Пошаговый рецепт приготовления<i class="fa fa-angle-down"></i></a>
													<hr>
													<div class="collapse show mt-4" id="collapse_steep">
														<div class="container">
															<div class="row">

																<?php 
																$fields_steps = CFS()->get('_group_steep');
																if($fields_steps){
																	foreach ($fields_steps as $value) {
																		echo '<h4 class="title-sm text-right w-100"><span>'.$value["_steep_group_title"].'</span></h4>';
																		foreach ($value['_step'] as $field_step) { ?>
																			<?php if ($field_step['_img_step']) { ?>
																				<div class="col-md-6 pl-0 ">
																				<?php }else{ ?>
																					<div class="col-md-12 pl-0 ">
																					<?php } ?>
																					<div class="p-b">
																						<p class="d-inline-block"><?php echo $field_step['_desc_step']; ?></p>
																					</div>
																				</div>
																				<?php if ($field_step['_img_step']) { ?>
																					<div class="col-md-6 pr-0 mb-3">
																						<img class="collapse-img"
																						src="<?php echo $field_step['_img_step']; ?>"
																						alt="<?php the_title(); ?>">
																						<span class="count-steep "><?php echo $count; ?></span>
																					</div>
																				<?php } else { ?>
																				<?php } ?>
																				<hr>
																				<?php $count++; ?>
																			<?php }
																		}
																	}else{ 
																		$fields_step = CFS()->get('_step');
																		$count = 1;
																		foreach ($fields_step as $field_step) { ?>
																			<?php if ($field_step['_img_step']) { ?>
																				<div class="col-md-6 pl-0 ">
																				<?php }else{ ?>
																					<div class="col-md-12 pl-0 ">
																					<?php } ?>
																					<div class="p-b">
																						<p class="d-inline-block"><?php echo $field_step['_desc_step']; ?></p>
																					</div>
																				</div>
																				<?php if ($field_step['_img_step']) { ?>
																					<div class="col-md-6 pr-0 mb-3">
																						<img class="collapse-img"
																						src="<?php echo $field_step['_img_step']; ?>"
																						alt="<?php the_title(); ?>">
																						<span class="count-steep "><?php echo $count; ?></span>
																					</div>
																				<?php } else { ?>
																				<?php } ?>
																				<hr>
																				<?php $count++; ?>
																			<?php }  }
																			?>
																		</div>
																	</div>
																	</div> <?php
																endwhile;
																?>
															</div>
														</main>
													</div>

													<?php $prevPost = get_previous_post(true);
													if ($prevPost) { ?>
														<div class="nav-box previous">
															<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'full'); ?>
															<?php previous_post_link('%link', "$prevthumbnail  <button class='link-btn btn btn-outline-primary-dev'><i class='fas fa-chevron-left'></i></button>", TRUE); ?>
														</div>

													<?php }
													$nextPost = get_next_post(true);
													if ($nextPost) { ?>
														<div class="nav-box next" style="float:right;">
															<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'full'); ?>
															<?php next_post_link('%link', "$nextthumbnail  <button class='link-btn btn btn-outline-primary-dev'><i class='fas fa-chevron-right'></i></button>", TRUE); ?>
														</div>
													<?php } ?>

													<div>
														<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
														<ins class="adsbygoogle"
														style="display:block; text-align:center;"
														data-ad-layout="in-article"
														data-ad-format="fluid"
														data-ad-client="ca-pub-1422844265004757"
														data-ad-slot="3078391695"></ins>
														<script>
															(adsbygoogle = window.adsbygoogle || []).push({});
														</script>
													</div>
													<div class="similar_records">
														<h3 class="title-more">Похожие записи</h3>
														<?php $categories = get_the_category($post->ID);
														if ($categories) {
															$category_ids = array();
															foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
															$args = array(
                            'category__in' => $category_ids, // Сортировка производится по категориям
                            'orderby' => rand, // Условие сортировки рандом
                            'post__not_in' => array($post->ID),
                            'showposts' => 4, //Количество выводимых записей
                            'caller_get_posts' => 1); // Запрещаем повторение ссылок
															$my_query = new wp_query($args);
															if ($my_query->have_posts()) {
																echo '<div class="conteiner"><div class="row">';
																while ($my_query->have_posts()) {
																	$my_query->the_post();
																	?>
																	<div class="col-md-3">
																		<div class="entry entry-more">
																			<div class="entry-thumb effect-lily">
																				<a class="featured-recipe" href="<?php the_permalink() ?>" rel="bookmark"
																					title="<?php the_title_attribute(); ?>">
																					<?php if (has_post_thumbnail()) { ?>
																						<img alt="<?php the_title(); ?>"
																						src="<?php echo get_the_post_thumbnail_url() ?>"
																						class="img-responsive wp-post-image" alt="">
																					<?php } else { ?>
																						<img alt="<?php the_title(); ?>"
																						src="/wp-content/themes/cooked/assets/img/wirwar.jpg"
																						class="img-responsive wp-post-image" alt="">
																					<?php } ?>
																				</a>
																			</div>
																		</div>
																	</div>

																	<?php
																}
																echo '</div></div>';
															}
															wp_reset_query();
														}
														?></div>
														<div>
															<?php
															if (comments_open() || get_comments_number()) :
																comments_template();
														endif;
														?>
													</div>
												</div>
												<div class="col-lg-3 sidebar p-0"> 
													<div class="sidebar__inner">
														<?php get_sidebar();?>	
													</div>
												</div>
											</div>
										</div>
										<div class="fixed-ing">
											<?php include 'custom-folder/custom-ingredient.php'; ?>
										</div>

										<?php
										get_footer();
