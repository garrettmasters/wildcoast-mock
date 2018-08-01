<?php

include ('variables.php');

$slides	= $section['slides_text'];

?>

<div>
  <h2>Title and Image Link Slider Section</h2>
  <p><?php echo $title; ?></p>
  <p><?php echo $link_text; ?></p>
  <p><?php echo $link_url; ?></p>


  <?php  foreach( (array) $slides as $key => $slide ) :

    $slide_title = $slide['title'];
    $slide_link_text = $slide['link_text'];
    $slide_link_url = $slide['link_url'];
    $slide_image = wp_get_attachment_url($slide['image']);

  ?>

  <p><?php echo $slide_title; ?></p>
  <p><?php echo $slide_link_text; ?></p>
  <p><?php echo $slide_link_url; ?></p>
  <p><?php echo $slide_image; ?></p>

  <?php endforeach; ?>

</div>
