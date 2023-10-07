<?php 
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );

add_filter( 'wpseo_next_rel_link', '__return_false' );
add_filter( 'wpseo_prev_rel_link', '__return_false' );


//микроразметка изображений
function micro_image($content) {
global $post;
$pattern = "<img";
$replacement = '<img itemprop="image"';
$content = str_replace($pattern, $replacement, $content);
return $content;
}
add_filter('the_content', 'micro_image');


//микроразметка подзаголовков h2
function micro_alternateName($content) {
global $post;
$pattern = "<h2";
$replacement = '<h2 itemprop="alternateName"';
$content = str_replace($pattern, $replacement, $content);
return $content;
}
add_filter('the_content', 'micro_alternateName');


//микроразметка подзаголовков h3
function micro_alternateName3($content) {
global $post;
$pattern = "<h3";
$replacement = '<h3 itemprop="alternateName"';
$content = str_replace($pattern, $replacement, $content);
return $content;
}
add_filter('the_content', 'micro_alternateName3');


//микроразметка видео
function micro_video($content) {
global $post;
$pattern = "<iframe";
$replacement = '<iframe itemprop="video"';
$content = str_replace($pattern, $replacement, $content);
return $content;
}