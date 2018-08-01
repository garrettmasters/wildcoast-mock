<?php

$hero_title            = carbon_get_the_post_meta( 'hero_title' );
$hero_option           = carbon_get_the_post_meta( 'hero_option' );

$video		    	   = wp_get_attachment_url(carbon_get_the_post_meta('hero_video'));
$video_img 			   = wp_get_attachment_url(carbon_get_the_post_meta('hero_video_image'));

$hero_img 			   = wp_get_attachment_url(carbon_get_the_post_meta('hero_image'));
$hero_img_subtitle     = carbon_get_the_post_meta( 'hero_img_subtitle' );

$hero_button     = carbon_get_the_post_meta( 'hero_button' );
$hero_link     = carbon_get_the_post_meta( 'hero_link' );

$hero_solid_subtitle   = carbon_get_the_post_meta( 'hero_solid_subtitle' );
$hero_bg_color_option  = carbon_get_the_post_meta( 'hero_bg_color_option' );
?>
<section class="">
    <div class="hero-slider">

        <div class="hero hero__overlay" style="background-image:url(<?php echo $hero_img; ?>)">
            <div class="hero__inner">
                <h1 class="white"><?php echo $hero_title; ?></h1>
                <p class="white"><?php echo $hero_img_subtitle; ?></p>
                <?php if (!empty($hero_link) && ($hero_button)): ?>
                <a class="btn" href="<?php echo $hero_link; ?>"> <?php echo $hero_button; ?> </a>
                <?php endif ?>
            </div>
        </div>
    </div>

</section>
 <?php get_template_part( 'partials/home/00a-social'); ?>
