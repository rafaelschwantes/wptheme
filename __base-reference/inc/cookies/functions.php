<?php
/**
 * Init
 */

require __DIR__ . '/defines.php';
require __DIR__ . '/../../../../../../lib/cookies/cookies.php';

function load_rigor_cookies() {
	rgInitCookie();

	if ( 'S' === $_SESSION[ COOKIES_SESSION_NAME ]->modal ) {
		add_action( 'wp_footer', 'load_rigor_cookies_modal' );
	}

	if (
		'S' === $_SESSION[ COOKIES_SESSION_NAME ]->performance
		|| 'S' === $_SESSION[ COOKIES_SESSION_NAME ]->targeting
	) {
		load_rigor_gtm();
	}
}

add_action( 'init', 'load_rigor_cookies' );


/**
 * Modal
 */

function load_rigor_cookies_modal() {
	require __DIR__ . '/conf.php';
	require __DIR__ . '/../../../../../../lib/cookies/cookiesModal.php';
}


/**
 * Google Tag Manager
 */

function load_rigor_gtm() {
	add_action( 'wp_head', function() {
		?>
		<script>
			window.dataLayer = window.dataLayer || [];
			dataLayer.push({
				'gtm.blocklist': [<?php echo $_SESSION[ COOKIES_SESSION_NAME ]->blocklist ?>]
			});

			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-<?php echo GTM_ID; ?>');
		</script>
		<?php
	} );

	add_action( 'wp_body_open', function() {
		?>
		<noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-<?php echo GTM_ID; ?>
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<?php
	} );
}
