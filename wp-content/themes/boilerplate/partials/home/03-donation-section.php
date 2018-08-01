<?php

// include ('variables.php');
$donate_container = $section['donation_block'][0];

$donation_title = $donate_container['donation_title'];
$donation_textarea = $donate_container['donation_textarea'];

$donation_button = $donate_container['donation_small_text'];
$donation_link = $donate_container['donation_small_link'];

$donation_img = wp_get_attachment_url($donate_container ['donation_image']);

$donation_amount_one = $donate_container['amount_one'];
$donation_text_one = $donate_container['text_one'];

$donation_amount_two = $donate_container['amount_two'];
$donation_text_two = $donate_container['text_two'];

$donation_amount_three = $donate_container['amount_three'];
$donation_text_three = $donate_container['text_three'];

$donation_amount_four = $donate_container['amount_four'];
$donation_text_four = $donate_container['text_four'];

?>
<section>
        <div class="container container-full help-section " style="background-image: url(<?php echo $donation_img; ?>)">
            <div class="container container-med-center center">
                <h3><?php echo $donation_title;  ?></h3>
                <p class="h5-alt"><?php echo $donation_textarea; ?></p>
                <a class="btn" href="<?php echo $donation_link; ?>"><?php echo $donation_button; ?></a><br>
                <a class="h8" href="#">View Other Ways to Give</a>
            </div>
            <div class="row">
                <div class="col-3 overlay-columns">
                        <div class="col-inner">
                            <h1><?php echo $donation_amount_one; ?></h1>
                            <p><?php echo $donation_text_one; ?></p>
                            <a class="btn" href="#">Give Now</a><br>
                        </div>
                </div>
                <div class="col-3 overlay-columns">
                        <div class="col-inner">
                            <h1><?php echo $donation_amount_two; ?></h1>
                            <p><?php echo $donation_text_two; ?></p>
                            <a class="btn" href="#">Give Now</a><br>
                        </div>
                </div>
                <div class="col-3 overlay-columns">
                        <div class="col-inner">
                            <h1><?php echo $donation_amount_three; ?></h1>
                            <p><?php echo $donation_text_three; ?></p>
                            <a class="btn" href="#">Give Now</a><br>
                        </div>
                </div>
                <div class="col-3 overlay-columns">
                        <div class="col-inner">
                            <h1><?php echo $donation_amount_four; ?></h1>
                            <p><?php echo $donation_text_four; ?></p>
                            <a class="btn" href="#">Give Now</a><br>
                        </div>
                </div>
            </div>
        </div>
</section>
