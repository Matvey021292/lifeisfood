<?php include 'func.php'; ?>
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <?php
        $args = array(
            'posts_per_page' => 10,
            'orderby' => 'comment_count',
            'post_status'=>'publish',
            'orderby' => 'ASC',
            'order'=> 'date'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();?>
                <div data-href='<?php the_permalink(); ?>' class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(<?php showBgImage();?>)">
                    <div class="container h-100">
                        <div class="row h-100 align-items-end">
                            <div class="col-12">
                                <div class="hero-slides-content">
                                    <div class="line"></div>
                                    <h2><?php the_title()?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
            }
        } else {
        }
        ?>

        <?php
        wp_reset_postdata();
        ?>
    </div>
</section>
