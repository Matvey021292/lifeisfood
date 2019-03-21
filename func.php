<?php
function showBgImage()
{
    if (has_post_thumbnail()) {
        echo get_the_post_thumbnail_url();
    } else {
        echo '/wp-content/themes/cooked/assets/img/wirwar.png';
    }
}

function the_truncated_post($symbol_amount) {
    $filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
    echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}




