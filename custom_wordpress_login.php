<?php
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
			      height: 95px;
			      width: 320px;
			      background-size: 350px 95px;
			      background-repeat: no-repeat;
			      padding-bottom: 1px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
