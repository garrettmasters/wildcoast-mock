<?php

include ('variables.php');

$slides	= $section['slides_images'];

?>

<div>
  <h2>Interstitial Title Content Link and Image Slider</h2>
  <p><?php echo $title; ?></p>


  <?php  foreach( (array) $slides as $key => $slide ) :
    $slide_image = wp_get_attachment_url($slide['image']);

  ?>

  <p><?php echo $slide_image; ?></p>

  <?php endforeach; ?>

</div>
