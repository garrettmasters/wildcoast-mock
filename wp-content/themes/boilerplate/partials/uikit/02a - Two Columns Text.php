<?php

include ('variables.php');

$columns = $section['blocks_text'];

?>

<div>
  <h2>Two Columns Title</h2>
  <p><?php echo $title; ?></p>
  <?php  foreach( (array) $columns as $key => $column ) :

    $column_title = $column['title'];
    $column_content = $column['subtitle'];
    $column_link_text = $column['link_text'];
    $column_link_url = $column['link_url'];

  ?>

  <p><?php echo $column_title; ?></p>
  <p><?php echo $column_content; ?></p>
  <p><?php echo $column_link_text; ?></p>
  <p><?php echo $column_link_url; ?></p>

  <?php endforeach; ?>
</div>
