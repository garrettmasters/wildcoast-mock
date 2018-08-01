<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'post_meta', __( 'Hero', 'crb' ) )
  ->show_on_template(array(
    'templates/home.php',
  ))
        // ->add_fields( array(
        //   Field::make( 'complex', 'hero_sections', '' )
        //     ->set_layout('tabbed-vertical')

            // Hero Section
            ->add_fields( array(
              Field::make( 'text', 'hero_title', 'Title' ),
                // ->set_help_text('Ex. A voice for the coast and the ocean' ),
              Field::make( 'text', 'hero_img_subtitle', 'Subtitle' ),
              Field::make( 'image', 'hero_image', 'Background Image' ),
              Field::make( 'text', 'hero_button', 'Button Title' ),
                // ->set_help_text('ex. learn more' ),
              Field::make( 'text', 'hero_link', 'Button Link' )
                // ->set_help_text('ex. /about-us' )
          ));
