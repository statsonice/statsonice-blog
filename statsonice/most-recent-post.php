<?php
require('../wp-load.php');
$recent_posts = wp_get_recent_posts();
$recent_post = $recent_posts[0];
// print_r($recent_post);
echo get_permalink($recent_post["ID"]);
echo "\n";
echo $recent_post["post_title"];
echo "\n";
echo $recent_post["post_date"];
?>
