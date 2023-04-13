<?php 
get_header();
get_template_part('template-parts/generic/content-page', 'content', array(
    'title' => get_the_title(),
    'image_url' => get_the_post_thumbnail_url(),
    'content' => get_the_content()
));
get_footer();
