<?php
/**
 * cooked functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cooked
 */
	// Register Custom Navigation Walker
require_once get_template_directory() . '/navwalker/class-wp-bootstrap-navwalker.php';

if ( ! function_exists( 'cooked_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cooked_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cooked, use a find and replace
		 * to change 'cooked' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cooked', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cooked' ),
			'menu-2' => esc_html__( 'menu2', 'cooked' ),
			'type' => esc_html__( 'type', 'cooked' ),
			'country' => esc_html__( 'country', 'cooked' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cooked_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cooked_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cooked_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cooked_content_width', 640 );
}
add_action( 'after_setup_theme', 'cooked_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cooked_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cooked' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cooked' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cooked_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cooked_style() {
	wp_enqueue_style( 'cooked_style', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'font', get_template_directory_uri() . '/assets/css/font.css' );
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css' );
	wp_enqueue_style( 'sb-admin', get_template_directory_uri() . '/assets/css/sb-admin.min.css' );
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/style.css' );

}

add_action( 'wp_enqueue_scripts', 'cooked_style' );

function cooked_scripts() {
	wp_enqueue_style( 'cooked-style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), null, true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'scroll', get_template_directory_uri() . '/assets/js/scroll.js', array(), null, true );
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), null, true );
	wp_enqueue_script( 'blazy', get_template_directory_uri() . '/assets/js/blazy.min.js', array(), null, true );
	wp_enqueue_script( 'active', get_template_directory_uri() . '/assets/js/active.js', array(), null, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cooked_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



include 'min-func.php';

function do_excerpt($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if (count($words) > $word_limit)
		array_pop($words);
	echo implode(' ', $words).' ...';
}

function trim_title_chars($count, $after) {
	$title = get_the_title();
	if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
	else $after = '';
	echo $title . $after;
}

add_filter( 'get_the_archive_title', function ( $title ) {

	if( is_category() ) {

		$title = single_cat_title( '', false );

	}

	return $title;

});

function true_load_posts(){

	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';

	// обычно лучше использовать WP_Query, но не здесь
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :

		// запускаем цикл
		while( have_posts() ): the_post(); ?>

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
											src="<?php echo get_the_post_thumbnail_url(get_the_ID(),"medium") ?>.webp"
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

			<?php 	endwhile;

		endif;
		die();
	}


	add_action('wp_ajax_loadmore', 'true_load_posts');
	add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

	function evgmoskalenko_copyright() { ?> <script> document.oncopy = function () { var bodyElement = document.body; var selection = getSelection(); var href = document.location.href; var copyright = "<br><br>Источник: <a href='"+ href +"'>" + href + "</a><br>© lifeisfood"; var text = selection + copyright; var divElement = document.createElement('div'); divElement.style.position = 'absolute'; divElement.style.left = '-99999px'; divElement.innerHTML = text; bodyElement.appendChild(divElement); selection.selectAllChildren(divElement); setTimeout(function() { bodyElement.removeChild(divElement); }, 0); }; </script> <?php } add_action('wp_footer', 'evgmoskalenko_copyright', 95);

