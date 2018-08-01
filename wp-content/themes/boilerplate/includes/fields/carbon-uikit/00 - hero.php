<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'post_meta', __( 'Hero', 'crb' ) )
  ->show_on_template(array(
    'templates/uikit.php',
  ))
  ->add_fields( array(
    Field::make( 'text', 'hero_title', 'Title' ),
    Field::make( 'select', 'hero_option', 'Hero Option' )
      ->add_options( array(
        'video' => 'Video',
        'image' => 'Image',
        'solid' => 'Solid Background',
      ) ),

    // Video Options
    Field::make( 'file', 'hero_video', 'Video' )
      ->set_conditional_logic(array(
        array(
          'field' => 'hero_option',
          'value' => 'video',
          'compare' => '=',
        )
      )),
    Field::make( 'image', 'hero_video_image', 'Placeholder Image' )
      ->set_conditional_logic(array(
        array(
          'field' => 'hero_option',
          'value' => 'video',
          'compare' => '=',
        )
      )),

    // Image Options
    Field::make( 'image', 'hero_image', 'Image' )
      ->set_help_text('Upload Image  ' )
      ->set_conditional_logic(array(
        array(
          'field' => 'hero_option',
          'value' => 'image',
          'compare' => '=',
        )
      )),
    Field::make( 'textarea', 'hero_img_subtitle', 'Subtitle' )
      ->set_help_text('ex. We go beyond temporary fixes...' )
      ->set_conditional_logic(array(
        array(
          'field' => 'hero_option',
          'value' => 'image',
          'compare' => '=',
        )
      )),

    // Plain Background Options
    Field::make( 'textarea', 'hero_solid_subtitle', 'Subtitle' )
      ->set_help_text('ex. We go beyond temporary fixes...' )
      ->set_conditional_logic(array(
        array(
          'field' => 'hero_option',
          'value' => 'solid',
          'compare' => '=',
        )
      )),
    Field::make( 'select', 'hero_bg_color_option', 'Hero Option' )
      ->add_options( array(
        'white' => 'White', // Use corresponding class names
        'color1' => 'Color1',
        'color2' => 'Color2',
      ) )
      ->set_conditional_logic(array(
        array(
          'field' => 'hero_option',
          'value' => 'solid',
          'compare' => '=',
        )
      ))




  )); // End Add Fields
