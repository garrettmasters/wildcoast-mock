
	</div><!-- .site-content -->

<section>
    <div class="container container-full footer" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-img.jpg);">
        <div class="row">
            <div class="col-6 form white">
                <h3>Connect with us</h3>
                <!-- <form> -->
<!--                      <input name="firstname" type="text" id="firstname" size="20" placeholder="First Name">
                     <input name="lastname" type="text" id="lastname" size="20" placeholder="Last Name">
                     <input name="email" type="email" id="email" size="47" placeholder="Email"> -->
                <!-- </form> -->
                <?php gravity_form( 1, false, false, false, '', false ); ?>
                <!-- <a class="btn" href="#">SIGN UP</a> -->
            </div>
            <div class="col-push-2 col-4 social white">
                <h3>Follow Along</h3>
                <div class="social-container">
                        <a class="social-icon" href="#">
                            <i class="fa fa-facebook fa-2x fa-fw">
                            </i>
                        </a>
                        <a class="social-icon" href="#">
                            <i class="fa fa-twitter fa-2x fa-fw">
                            </i>
                        </a>
                        <a class="social-icon" href="#">
                            <i class="fa fa-instagram fa-2x fa-fw">
                            </i>
                        </a>
                        <a class="social-icon" href="#">
                            <i class="fa fa-youtube-play fa-2x fa-fw">
                            </i>
                        </a>
                        <a class="social-icon" href="#">
                            <i class="fa fa-snapchat-ghost fa-2x fa-fw">
                            </i>
                        </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer--bar">
        <div>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/charity-engine-logo.png"></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/guidestar-logo.png"></a>
        </div>
        <div class="footer--nav">
            <a href="#">About Us</a>
            <a href="#">Contact</a>
            <a href="#">Resources</a>
            <a href="#">Blog</a>
            <a href="#">Privacy Notice</a>
        </div>
        <div>
            <a class="fiftylogo" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fifty-logo.png"></a>
        </div>
    </div>
</section>



<div id="modals"></div>

<?php wp_footer(); ?>

</body>
</html>
