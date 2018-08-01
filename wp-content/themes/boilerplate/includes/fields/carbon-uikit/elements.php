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

$general_blocks_title_content_links = array(
  Field::make( 'complex', 'blocks_text', 'Blocks with Image, Text, Content, and Links'  )
    ->set_layout( 'tabbed-horizontal' )
    ->add_fields( array_merge( $title, $content, $link, array(
  )))
);

$interstitial_title_content_link = array_merge($title, $content, $link);
