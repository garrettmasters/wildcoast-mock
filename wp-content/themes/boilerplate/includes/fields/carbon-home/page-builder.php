<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Helper\Helper;

include ('elements.php');

Container::make( 'post_meta', __( 'Page Builder', 'crb' ) )
  ->show_on_template(array(
    'templates/home.php',
  ))
  ->add_fields( array(
    Field::make( 'complex', 'carbon_sections', 'Sections' )
    ->set_layout('tabbed-vertical')

    // Interstitial Text
    ->add_fields('interstitial_text_link', 'Interstitial Text', array_merge( $interstitial_title_content_link ))
    // Left Right Text - Image Overlay
    ->add_fields('left_right_text_image', 'Left/Right Text - Image', array_merge( $left_right_text_image_overlay ))
    // Four Block Columns
    ->add_fields('four_column_donation', '4 Column Donation Section', array_merge( $four_columns_donation))
    // Blog Carousel
    ->add_fields('blog_carousel', 'Blog Carousel', array_merge( $blog_carousel))
    // Blog Carousel
    ->add_fields('side_by_side_with_video', 'Side by Side with Video', array_merge( $side_by_side_with_video))








  )); // end add_fields;

