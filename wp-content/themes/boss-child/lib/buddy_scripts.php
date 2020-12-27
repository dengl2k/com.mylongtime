<?php
/**
 * Custom Login Logo and Helper scripts
 *
 * @since Boss 1.0.0
 */
function buddyboss_custom_login_scripts_child() {
	//placeholders
	if ( true) {

	echo '<script>
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById("user_login").setAttribute( "placeholder", "' . __( "Username", "boss" ) . '" );
            document.getElementById("user_pass").setAttribute( "placeholder", "' . __( "Password", "boss" ) . '" );

            var input = document.querySelectorAll(".forgetmenot input")[0];
            var label = document.querySelectorAll(".forgetmenot label")[0];
            var text = document.querySelectorAll(".forgetmenot label")[0].innerHTML.replace(/<[^>]*>/g, "");

            label.innerHTML = "";

            label.appendChild(input); ;

            label.innerHTML += "<strong>"+ text +"</strong>";

            labels = document.querySelectorAll("label");

            for (var i = labels.length - 1; i >= 0; i--)
            {
                var child = labels[i].firstChild, nextSibling;

                while (child) {
                    nextSibling = child.nextSibling;
                    if (child.nodeType == 3) {
                        child.parentNode.removeChild(child);
                    }
                    child = nextSibling;
                }
            }

        });

    </script>';

	$show		 = true;
	$logo_id	 = boss_get_option( 'boss_admin_login_logo', 'id' );
	$logo_img	 = wp_get_attachment_image_src( $logo_id, 'full' );

	// Logo styles updated for the best view
	if ( $show ) {
		$boss_wp_loginbox_width	 = 312;
		$boss_logo_url			 = esc_url(home_url('/')) . 'img/thailongtime_login.png';
		$boss_logo_width		 = 260;
		$boss_logo_height		 = 213;

		if ( $boss_logo_width > $boss_wp_loginbox_width ) {
			$ratio					 = $boss_logo_height / $boss_logo_width;
			$boss_logo_height		 = ceil( $ratio * $boss_wp_loginbox_width );
			$boss_logo_width		 = $boss_wp_loginbox_width;
			$boss_background_size	 = 'contain';
		} else {
			$boss_background_size = 'auto';
		}

		echo '<style type="text/css">
				#login h1 a { 
				background: url( ' . esc_url( $boss_logo_url ) . ' ) no-repeat 50% 0;
                background-size: ' . esc_attr( $boss_background_size ) . ';
				overflow: hidden;
				text-indent: -9999px;
				display: block;';

		if ( $boss_logo_width && $boss_logo_height ) {
			echo 'height: ' . esc_attr( $boss_logo_height ) . 'px;
					width: ' . esc_attr( $boss_logo_width ) . 'px;
					margin: 0 auto;
					padding: 0;';
		}
		echo '}';

		echo '</style>';
	}

	$title_font = boss_get_option( 'boss_site_title_font_family' );

	$title_font = wp_parse_args( $title_font, array(
			'font-family' => '',
			'font-size' => '',
			'font-style' => '',
			'google' => '',
		));

	if ( $title_font ) {
		$font_family = $title_font[ 'font-family' ];
		$font_size	 = $title_font[ 'font-size' ];
		$font_weight = ! empty( $title_font[ 'font-weight' ] ) ? ':' . $title_font[ 'font-weight' ] : '';
		$font_style	 = $title_font[ 'font-style' ];
		$subsets	 = ! empty( $title_font[ 'subsets' ] ) ? '&amp;subset=' . $title_font[ 'subsets' ] : '';
		$google		 = $title_font[ 'google' ];

		if ( $google != 'false' && $font_family ) {
			$link = '//fonts.googleapis.com/css?family=' . urlencode( $font_family ) . $font_weight . $subsets;
			echo '<link href="' . $link . '" rel="stylesheet" type="text/css">';
		}
	}
	?>

	<style type="text/css">
		.oneall_social_login {
			padding-top: 20px;
		}
	</style>

		<style type="text/css">
			body.login {
				background-color: <?php echo esc_attr( boss_get_option( 'boss_admin_screen_background_color' ) ); ?> !important;
			}

			<?php if ( $font_family ) { ?>
				#login h1 a {
					font-family: <?php echo $font_family; ?>;
					font-size: <?php echo $font_size; ?>;
					font-weight: <?php echo $title_font[ 'font-weight' ]; ?>;
					<?php if ( $font_style ) { ?>
						font-style: <?php echo $font_style; ?>;
					<?php } ?>
				}
			<?php } ?>

			.login #nav, .login #backtoblog a, .login #nav a, .login label, .login p.indicator-hint {
				color: <?php echo esc_attr( boss_get_option( 'boss_admin_screen_text_color' ) ); ?> !important;
			}

			.login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
				color: <?php echo esc_attr( boss_get_option( 'boss_admin_screen_button_color' ) ); ?> !important;
			}

			.login form .forgetmenot input[type="checkbox"]:checked + strong:before,
			#login form p.submit input {
				background-color: <?php echo esc_attr( boss_get_option( 'boss_admin_screen_button_color' ) ); ?> !important;
				box-shadow: none;
			}

		</style>

		<?php
	}
}

add_action( 'login_head', 'buddyboss_custom_login_scripts_child', 2 );
// 27.12.2020
// Remove customizer CSS output
add_action( 'after_setup_theme', 'remove_buddyboss_customizer_css', 999) ;
function remove_buddyboss_customizer_css() {
	remove_action('wp_head', 'boss_generate_option_css');
}
?>