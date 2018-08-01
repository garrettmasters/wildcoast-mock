<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

$link = array(
  Field::make( 'text', 'link_text', 'Link Title' )
    ->set_help_text('ex. Check out our blog ' ),
  Field::make( 'text', 'link_url', 'Link URL' )
    ->set_help_text('ex. /about ' ),
);

$image = array(
  Field::make( 'image', 'image', 'Photo' ),
);

$optional_image = array(
  Field::make( 'image', 'image', 'Photo' )
  ->set_help_text('ex. Optional' ),
);

$title = array(
  Field::make( 'text', 'title', 'Title' ),
);

$content = array(
  Field::make( 'textarea', 'subtitle', 'Subtitle' ),
);

$open_text = array(
  Field::make( 'textarea', 'opentext', 'Open Text' )
  ->set_help_text('desc. This is an open text field that supports html' ),
);

$margin_top_select = array(
  Field::make( 'select', 'margin_top_select', 'Text alignment' )
    ->add_options( array(
        '0' => '0',
        '10' => '10',
        '20' => '20',
        '30' => '30',
        '40' => '40',
    ) )
    ->set_default_value( '20' )
);

$margin_bottom_select = array(
  Field::make( 'select', 'margin_bottom_select', 'Text alignment' )
    ->add_options( array(
        '0' => '0',
        '10' => '10',
        '20' => '20',
        '30' => '30',
        '40' => '40',
    ) )
    ->set_default_value( '20' )
);


$slides_images = array(
  Field::make( 'complex', 'slides_images', 'Image Slider' )
    ->set_layout( 'tabbed-horizontal' )
    ->add_fields( array_merge( $image ))
);

$slides_image_title = array(
  Field::make( 'complex', 'slides_text', 'Image Slider with Text'  )
    ->set_layout( 'tabbed-horizontal' )
    ->add_fields( array_merge( $image, $title, array(
  )))
);

$slides_image_title_links = array(
  Field::make( 'complex', 'slides_text', 'Image Slider with Text and Links'  )
    ->set_layout( 'tabbed-horizontal' )
    ->add_fields( array_merge( $image, $title, $link, array(
  )))
);

$slides_image_title_links_min3 = array(
  Field::make( 'complex', 'slides_text', 'Image Slider with Text and Links'  )
    ->set_layout( 'tabbed-horizontal' )
    ->set_min(3)
    ->add_fields( array_merge( $image, $title, $link, array(
  )))
);

$two_blocks_title_content_image_links = array(
  Field::make( 'complex', 'blocks_text', 'Blocks with Image, Text, Content, and Links'  )
    ->set_layout( 'tabbed-horizontal' )
    ->set_min(2)
    ->set_max(2)
    ->add_fields( array_merge( $image, $title, $content, $link, array(
  )))
);

$two_blocks_title_content_links = array(
  Field::make( 'complex', 'blocks_text', 'Blocks with Title, Content, and Links'  )
    ->set_layout( 'tabbed-horizontal' )
    ->set_min(2)
    ->set_max(2)
    ->add_fields( array_merge( $title, $content, $link, array(
  )))
);

$three_blocks_title_content_image_links = array(
  Field::make( 'complex', 'blocks_text', 'Blocks with Image, Text, Content, and Links'  )
    ->set_layout( 'tabbed-horizontal' )
    ->set_min(3)
    ->set_max(3)
    ->add_fields( array_merge( $image, $title, $content, $link, array(
  )))
);

$three_blocks_title_content_links = array(
  Field::make( 'complex', 'blocks_text', 'Blocks with Title, Content, and Links'  )
    ->set_layout( 'tabbed-horizontal' )
    ->set_min(3)
    ->set_max(3)
    ->add_fields( array_merge( $title, $content, $link, array(
  )))
);

$three_blocks_title_content = array(
  Field::make( 'complex', 'blocks_text', 'Blocks with Title and Content'  )
    ->set_layout( 'tabbed-horizontal' )
    ->set_min(3)
    ->set_max(3)
    ->add_fields( array_merge( $title, $content, array(
  )))
);

$four_blocks_title_content_image_links = array(
  Field::make( 'complex', 'blocks_text', 'Blocks with Image, Text, Content, and Links'  )
    ->set_layout( 'tabbed-horizontal' )
    ->set_min(4)
    ->add_fields( array_merge( $image, $title, $content, $link, array(
  )))
);

$donation_top_section = array($title, $content, $link);

$four_column_donation_section = array(
  Field::make( 'complex', 'donation_block' )
  ->  set_max(1)
  ->add_fields( array(
          Field::make( 'text', 'donation_title', 'Title' ),
          Field::make( 'textarea', 'donation_textarea', 'Content' ),
          Field::make( 'text', 'donation_small_text', 'Link Button' ),
          Field::make( 'text', 'donation_small_link', 'Link URL' ),
          Field::make( 'text', 'amount_one', 'Amount One' ),
          Field::make( 'text', 'text_one', 'Text One' ),
          Field::make( 'text', 'amount_two', 'Amount Two' ),
          Field::make( 'text', 'text_two', 'Text Two' ),
          Field::make( 'text', 'amount_three', 'Amount Three' ),
          Field::make( 'text', 'text_three', 'Text Three' ),
          Field::make( 'text', 'amount_four', 'Amount Four' ),
          Field::make( 'text', 'text_four', 'Text Four' ),
          Field::make( 'image', 'donation_image', 'Background Image' ),

  ))
);

$general_blocks_title_content_links = array(
  Field::make( 'complex', 'blocks_text', 'Blocks with Image, Text, Content, and Links'  )
    ->set_layout( 'tabbed-horizontal' )
    ->add_fields( array_merge( $title, $content, $link, array(
  )))
);

$interstitial_title_content_link = array_merge($title, $content, $link);

$right =  array(
  Field::make( 'checkbox', 'align_right', 'Align Content Right' )
   ->set_option_value( 'yes' )
);

$left_right_text_image_overlay = array_merge( $title, $content, $image, $link, $right);

$blog_column = array(
  Field::make( 'complex', 'blog_item' )
  ->set_min(3)
  ->set_layout( 'tabbed-horizontal' )
  ->add_fields( array(
      Field::make( 'image', 'blog_image', 'Blog Image' ),
      Field::make( 'text', 'blog_title', 'Blog Title' ),
      Field::make( 'textarea', 'blog_text', 'Blog Text' ),
      Field::make( 'text', 'blog_button_text', 'Blog Button Text' ),
      Field::make( 'text', 'blog_button_link', 'Blog Button Link' ),
  ))
);

$blog_carousel = array_merge( $title, $content, $blog_column);


$side_by_side_with_video = array(
  Field::make( 'complex', 'side_by_side' )
  ->set_max(1)
  ->add_fields( array(
      Field::make( 'text', 'left_side_title', 'Left Side Title' ),
      Field::make( 'textarea', 'left_side_text', 'Left Side Text' ),
      Field::make( 'text', 'left_side_button_text', 'Left Side Button Text' ),
      Field::make( 'text', 'left_side_button_link', 'Left Side Button Link' ),
      Field::make( 'image', 'left_side_image', 'Left Side Image' ),
      Field::make( 'text', 'right_side_button_link', 'Right Side Button Link' ),
      Field::make( 'text', 'right_side_text', 'Right Side Text' ),
      Field::make( 'image', 'right_side_image', 'Right Side Image' ),
  ))
);
