<?php

// include ('variables.php');
$test = $section[ 'blog_item' ];

$title = $section[ 'title' ];
$content = $section[ 'subtitle' ];

$blog_items = $section[ 'blog_item' ];

?>
<section>
    <div class="container container-large">
        <div class="center events">
            <h3 class="color-primary"><?php echo $title; ?></h3>
            <p><?php echo $content; ?></p>
        </div>
        <div class="image-carousel">
            <?php foreach ( $blog_items as $key => $blog_item ) :
                $blog_image = wp_get_attachment_url($blog_item ['blog_image']);
                $blog_title = $blog_item[ 'blog_title' ];
                $blog_text = $blog_item[ 'blog_text' ];
                $blog_button_text = $blog_item[ 'blog_button_text' ];
                $blog_button_link = $blog_item[ 'blog_button_link' ];
            ?>
            <div class="carousel-column">
                <img class="carousel-item" src="<?php echo $blog_image; ?>">
                <h4 class="color-primary h4-alt"><?php echo $blog_title; ?></h4>
                <p><?php echo $blog_text; ?></p>
                <a class="btn btn-color" href="<?php echo $blog_button_link; ?>"><?php echo $blog_button_text; ?></a>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>
