1) How To Use jQuery Ajax In WordPress
https://www.youtube.com/watch?v=APaCwk77hCc


2)  Wordpress queries
https://codex.wordpress.org/Class_Reference/wpdb#Running_General_Queries

3) google= get current page slug name in wordpress

<?php 
    global $post;
    $post_slug = $post->post_name;
?>

or

$slug = get_post_field( 'post_name');


4) google == wordpress get current page id

global $post;
echo $post->ID;

OR

global $wp_query;
echo $wp_query->post->ID;
