<?php

include ('variables.php');

$buttons = $section['buttons']

?>

<div>
  <h2>Buttons</h2>
  <p><?php echo $title; ?></p>
  <?php  foreach( (array) $buttons as $key => $button ) :

    $link_url = $button['link_url'];
    $link_text = $button['link_text'];
    
  ?>

  <p><?php echo $link_url; ?></p>
  <p><?php echo $link_text; ?></p>

<?php endforeach; ?>
</div>
