<?php
/*
 * Template Name: UI Kit
 *
 */
get_header(); ?>

<?php
/**
 * Hero
 */
get_template_part( 'partials/uikit/00 - hero'); ?>
<h1>Hello World</h1>

<?php while ( have_posts() ) : the_post();

  $sections = carbon_get_the_post_meta( 'carbon_sections' );

  foreach( (array) $sections as $key => $section ) :

  	//Interstitial Text Image
    if ( $section['_type'] === 'interstitial_text_link_image' ) :
      include(locate_template('partials/uikit/01b - Interstitial Text Image.php'));
    endif;
  	//Interstitial Text Link
    if ( $section['_type'] === 'interstitial_text_link' ) :
      include(locate_template('partials/uikit/01a - Interstitial Text.php'));
    endif;

  	//Two Columns Text with Title
    if ( $section['_type'] === 'two_column_text' ) :
      include(locate_template('partials/uikit/02a - Two Columns Text.php'));
    endif;
  	//Two Columns Text with Title and Image
    if ( $section['_type'] === 'two_column_text_image' ) :
      include(locate_template('partials/uikit/02b - Title and Two Column Text with Image.php'));
    endif;

  	//Three Columns Text with Title and Image
    if ( $section['_type'] === 'three_grid_title_text_image_links' ) :
      include(locate_template('partials/uikit/03a - Title and Three Block Text with Image and Links.php'));
    endif;
  	//Three Columns Text with Title and Image
    if ( $section['_type'] === 'three_column_text_image_links' ) :
      include(locate_template('partials/uikit/03b - Three Column Text with Image and Links.php'));
    endif;
  	//Title and Three Column Text with Links
    if ( $section['_type'] === 'three_column_title_text_links' ) :
      include(locate_template('partials/uikit/03c - Title and Three Column Text with Links.php'));
    endif;
  	//Title and Three Column Text with Links
    if ( $section['_type'] === 'three_column_title_text' ) :
      include(locate_template('partials/uikit/03d - Three Columns.php'));
    endif;

  	//Four Column Block
    if ( $section['_type'] === 'four_block_title_content_image_links' ) :
      include(locate_template('partials/uikit/04a - Four Column Block.php'));
    endif;

  	//Title and Image Link Slider Section
    if ( $section['_type'] === 'slider_title_image_link' ) :
      include(locate_template('partials/uikit/05a - Title and Image Link Slider Section.php'));
    endif;
  	//Interstitial Title Content Link and Image Slider
    if ( $section['_type'] === 'slider_content_link_image' ) :
      include(locate_template('partials/uikit/05b - Interstitial Title Content Link and Image Slider.php'));
    endif;

  	//Facts Columns
    if ( $section['_type'] === 'facts_columns' ) :
      include(locate_template('partials/uikit/06a - Facts Columns.php'));
    endif;

  	//Facts Columns
    if ( $section['_type'] === 'open_text_field' ) :
      include(locate_template('partials/uikit/07a - Open Text.php'));
    endif;

  	//Buttons
    if ( $section['_type'] === 'button_sections' ) :
      include(locate_template('partials/uikit/08a - Buttons.php'));
    endif;

  	//Alternating Blocks
    if ( $section['_type'] === 'alternating_blocks' ) :
      include(locate_template('partials/uikit/09a - Alternating Blocks.php'));
    endif;


  endforeach;
  endwhile;


?>



<?php get_footer(); ?>
