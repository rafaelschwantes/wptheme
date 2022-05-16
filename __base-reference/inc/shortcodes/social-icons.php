<?php
function social_icons_shortcode() {
	$social_icons = new WP_Query( array(
		'post_type' 		=> 'social_icon',
    	'posts_per_page'	=> -1,
	) );

	$html = '';

	if ( $social_icons->have_posts() )  {
		$html .= '<div class="social-icons">';
			while ( $social_icons->have_posts() ) { $social_icons->the_post();
				$html .= '<a
					href="' . esc_url( get_field( 'link' ) ) . '"
					target="_blank"
					title="' . get_the_title() . '"
				>
					<img src="' . esc_url( get_field( 'icon' ) ) . '" alt="' . get_the_title() . '" >
				</a>';
			}
		$html .= '</div><!-- .social-icons -->';
	} wp_reset_postdata();

	return $html;
}

add_shortcode( 'social_icons', 'social_icons_shortcode' );
