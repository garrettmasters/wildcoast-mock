<?php

include ('variables.php');

// $title  = $section['title'] ??   '';
// $link_text  = $section['link_text'] ??   '';
// $link_url  = $section['link_url']   ??   '';
// $content  = $section['subtitle']    ??   '';

?>

<section class="section--xlarge open-text">
    <div class="container container-small center">
        <h3 class="color-primary"><?php echo $title; ?></h3>
        <p><?php echo $content; ?></p>
        <a class="btn btn-color" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
    </div>
</section>
