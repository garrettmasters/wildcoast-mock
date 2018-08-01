<?php

// include ('variables.php');
$container = $section[ 'side_by_side' ][0];

$left_title = $container[ 'left_side_title' ];
$left_text = $container[ 'left_side_text' ];
$left_button_text = $container[ 'left_side_button_text' ];
$left_button_link = $container[ 'left_side_button_link' ];
$left_image = wp_get_attachment_url($container ['left_side_image']);

$right_link = $container[ 'right_side_button_link' ];
$right_text = $container[ 'right_side_text' ];
$right_image = wp_get_attachment_url($container ['right_side_image']);

?>

<section>
    <div class="container container-full">
        <div class="row">
            <div class="col-6 overlay-blue" style="background-image: url(<?php echo $left_image; ?>)">
                    <div class="image-text-inner white">
                        <h3><?php echo $left_title; ?></h3>
                        <p class="h5-alt"><?php echo $left_text; ?></p>
                        <a class="btn" href="<?php echo $left_button_link; ?>"><?php echo $left_button_text; ?></a>
                    </div>

            </div>
            <div class="col-6 overlay-blue" style="background-image: url(<?php echo $right_image; ?>)">
                    <div class="image-text-inner-center white">
                            <a href="<?php echo $right_link; ?>" class="btn-round"><i class="fa fa-play fa-2x"></i></a>
                        <p class="h5"><?php echo $right_text; ?></p>
                    </div>
            </div>
        </div>
    </div>
</section>
