<?php

include ('variables.php');

$donation_columns = $section ['donation_block'];
?>

<section>
        <div class="container container-full help-section " style="background-image: url(<?php echo $image; ?>)">
            <div class="container container-med-center center">
                <h3><?php echo $title;  ?></h3>
                <p class="h5-alt"><?php echo $content; ?></p>
                <a class="btn" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a><br>
                <a class="h8" href="#">View Other Ways to Give</a>
            </div>
            <div class="row">
                <?php foreach ( $donation_columns as $key => $donation_column ) :
                $donation_amount = $donation_column[ 'donation_amount' ];
                $donation_text = $donation_column[ 'donation_text' ];
                ?>
                <div class="col-3 overlay-columns">
                        <div class="col-inner">
                            <h1><?php echo $donation_amount; ?></h1>
                            <p><?php echo $donation_text; ?></p>
                            <a class="btn" href="#">Give Now</a><br>
                        </div>
                </div>
                <?php endforeach ?>
        </div>
</section>
