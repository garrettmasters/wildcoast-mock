<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Helper\Helper;

include ('elements.php');

Container::make( 'post_meta', __( 'Page Builder', 'crb' ) )
  ->show_on_template(array(
    'templates/uikit.php',
  ))
  ->add_fields( array(
    Field::make( 'complex', 'carbon_sections', 'Sections' )
    ->set_layout('tabbed-vertical')

    ->add_fields('interstitial_text_link_image', 'Interstitial Text with Image', array_merge( $interstitial_title_content_link, $image  ))
    ->add_fields('interstitial_text_link', 'Interstitial Text', array_merge( $interstitial_title_content_link ))

    ->add_fields('two_column_text', 'Title and Two Column Text', array_merge( $title, $two_blocks_title_content_links ))
    ->add_fields('two_column_text_image', 'Title and Two Column Text with Image', array_merge( $title, $two_blocks_title_content_image_links ))

    ->add_fields('three_grid_title_text_image_links', 'Title and Three Block Text with Image and Links', array_merge( $title, $link, $three_blocks_title_content_image_links ))
    ->add_fields('three_column_text_image_links', 'Three Column Text with Image and Links', array_merge( $three_blocks_title_content_image_links ))
    ->add_fields('three_column_title_text_links', 'Title and Three Column Text with Links', array_merge( $title, $three_blocks_title_content_links ))
    ->add_fields('three_column_title_text', 'Three Columns with Title', array_merge( $title, $three_blocks_title_content ))

    ->add_fields('four_block_title_content_image_links', 'Four Column Block', array_merge( $four_blocks_title_content_image_links ))


    ->add_fields('slider_title_image_link', 'Title and Image Link Slider Section', array_merge( $title, $link, $slides_image_title_links ))
    ->add_fields('slider_content_link_image', 'Interstitial Title Content Link and Image Slider', array_merge( $interstitial_title_content_link, $slides_images ))

    ->add_fields('facts_columns', 'Facts Columns', array_merge( $title, $general_blocks_title_content_links ))
    ->add_fields('open_text_field', 'Open Field Text', array_merge( $open_text ))
    ->add_fields('button_sections', 'Button Section', array_merge( $title, array(
      Field::make( 'complex', 'buttons', 'Buttons')
      ->set_layout( 'tabbed-horizontal' )
      ->add_fields( $link )
    )))

    ->add_fields('alternating_blocks', 'Alternating Blocks', array_merge( $title, $general_blocks_title_content_links ))





  )); // end add_fields;
