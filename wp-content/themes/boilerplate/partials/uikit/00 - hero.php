<?php

$hero_title            = carbon_get_the_post_meta( 'hero_title' );
$hero_option           = carbon_get_the_post_meta( 'hero_option' );

$video		    	   = wp_get_attachment_url(carbon_get_the_post_meta('hero_video'));
$video_img 			   = wp_get_attachment_url(carbon_get_the_post_meta('hero_video_image'));

$hero_img 			   = wp_get_attachment_url(carbon_get_the_post_meta('hero_image'));
$hero_img_subtitle     = carbon_get_the_post_meta( 'hero_img_subtitle' );

$hero_solid_subtitle   = carbon_get_the_post_meta( 'hero_solid_subtitle' );
$hero_bg_color_option  = carbon_get_the_post_meta( 'hero_bg_color_option' );

?>
