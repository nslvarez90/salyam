<?php
/*
 * Template Name: Index
 *
 *  */

get_header();
  get_template_part('template-parts/home/home-slider', 'slider');
  get_template_part('template-parts/home/services', 'services');
  get_template_part('template-parts/home/about-us', 'about');
  get_template_part('template-parts/home/projects', 'projects');
  get_template_part('template-parts/home/coments', 'coments');
  //get_template_part('template-parts/home/home-location', 'location');
 // get_template_part('template-parts/home/home-contact', 'contact');
get_footer();
