<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since 2018
 */
?>

<?php get_header(); ?>

         <!-- * Hero * -->
        <?php get_template_part( 'partials/home/00-hero'); ?>


        <?php while ( have_posts() ) : the_post();

              $sections = carbon_get_the_post_meta( 'carbon_sections' );

              foreach( (array) $sections as $key => $section ) :

                //Interstitial Text Link
                if ( $section['_type'] === 'interstitial_text_link' ) :
                  include(locate_template('partials/home/01-interstitial-text.php'));
                endif;

                //Left Right Text With Image
                if ( $section['_type'] === 'left_right_text_image' ) :
                  include(locate_template('partials/home/02-left-right-text.php'));
                endif;

                //Donation Section
                if ( $section['_type'] === 'four_column_donation' ) :
                  include(locate_template('partials/home/03-donation-section.php'));
                endif;

                //Blog Section
                if ( $section['_type'] === 'blog_carousel' ) :
                  include(locate_template('partials/home/04-blog-carousel.php'));
                endif;

                //Side By Side with Video
                if ( $section['_type'] === 'side_by_side_with_video' ) :
                  include(locate_template('partials/home/05-side-by-side.php'));
                endif;





            endforeach;
            endwhile;


        ?>

<?php get_footer(); ?>

