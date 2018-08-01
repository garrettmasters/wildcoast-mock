<?php

include ('variables.php');
$right  = $section['align_right'];
?>

<section>
    <div class="image-text overlay-blue<?php if ( $right ) echo "-right" ?>" style="background-image: url(<?php echo $image ?>">
        <div class="image-text-inner <?php if ( $right ) echo "right" ?>">
            <h3><?php echo $title ?></h3>
            <p class="large"><?php echo $content ?></p>
            <a class="btn" href="<?php echo $link_url ?>"><?php echo $link_text ?></a>
        </div>
    </div>
</section>
