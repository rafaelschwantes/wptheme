<?php 

/**
* Limit string
 */

 function limit_string_by_chars( $string, $chars ) {
    if ( strlen( $string ) > $chars ) {
        $string = substr( $string, 0, $chars ) . '...';
    }
    return $string;
}

/**
 * Posts fixos 
 */
$stickyPost = new WP_Query( array(
    'posts_per_page' => 1,
    'post__in' => get_option( 'sticky_posts' ),
    'ignore_sticky_posts' => 1
));

/**
 * Posts todos ou whit limit 
 */

$trendingPost = new WP_Query( array(
    'posts_per_page'   => 3,
    'meta_key' => 'trending',
    'meta_value' => true,

));