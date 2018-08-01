<?php

include ('variables.php');

$columns	= $section['blocks_text'];

?>

<div>
  <h2>Alternating Blocks</h2>
  <p><?php echo $title; ?></p>

  <div class="col-2">
    <h2>Left</h1>

    <?php  foreach( (array) $columns as $index => $slide ) :

    $slide_title = $slide['title'];
    $slide_content = $slide['subtitle'];
    $slide_link_text = $slide['link_text'];
    $slide_link_url = $slide['link_url'];

    if ($index % 2 == 0):

    ?>
    <p><?php echo $slide_title; ?></p>
    <p><?php echo $slide_content; ?></p>
    <p><?php echo $slide_link_text; ?></p>
    <p><?php echo $slide_link_url; ?></p>
    <?php endif; ?>
  <?php endforeach; ?>
  </div>

  <div class="col-2">
    <h2>Right</h2>
    <?php  foreach( (array) $columns as $index => $slide ) :

    $slide_title = $slide['title'];
    $slide_content = $slide['subtitle'];
    $slide_link_text = $slide['link_text'];
    $slide_link_url = $slide['link_url'];

    if ($index % 2 == 1):

    ?>
    <p><?php echo $slide_title; ?></p>
    <p><?php echo $slide_content; ?></p>
    <p><?php echo $slide_link_text; ?></p>
    <p><?php echo $slide_link_url; ?></p>
  <?php endif; ?>
  <?php endforeach; ?>
  </div>


</div>
