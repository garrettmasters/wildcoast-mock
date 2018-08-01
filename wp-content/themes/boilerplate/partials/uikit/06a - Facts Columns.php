<?php

include ('variables.php');

$columns	= $section['blocks_text'];

?>

<div>
  <h2>Facts Columns</h2>
  <p><?php echo $title; ?></p>


  <?php  foreach( (array) $columns as $key => $slide ) :
    $slide_title = $slide['title'];
    $slide_content = $slide['subtitle'];
    $slide_link_text = $slide['link_text'];
    $slide_link_url = $slide['link_url'];

  ?>

  <p><?php echo $slide_title; ?></p>
  <p><?php echo $slide_content; ?></p>
  <p><?php echo $slide_link_text; ?></p>
  <p><?php echo $slide_link_url; ?></p>

  <?php endforeach; ?>

</div>
