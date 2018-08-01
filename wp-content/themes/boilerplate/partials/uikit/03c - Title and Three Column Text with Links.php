<?php

include ('variables.php');

$columns = $section['blocks_text'];

?>

<div>
  <h2>Three Column Text with Links</h2>
  <?php  foreach( (array) $columns as $key => $column ) :

    $column_title = $column['title'];
    $column_content = $column['subtitle'];
    $column_link_text = $column['link_text'];
    $column_link_url = $column['link_url'];
    $column_image = wp_get_attachment_url($column['image']);

  ?>

  <p><?php echo $column_title; ?></p>
  <p><?php echo $column_content; ?></p>
  <p><?php echo $column_link_text; ?></p>
  <p><?php echo $column_link_url; ?></p>
  <p><?php echo $column_image; ?></p>

  <?php endforeach; ?>
</div>
