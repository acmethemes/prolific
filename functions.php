<?php
/**
 * Prolific functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Prolific
 */


/**
 *  Default Theme layout options
 *
 * @since Prolific 1.0.0
 *
 * @param null
 * @return array $prolific_theme_layout
 */
if ( ! function_exists( 'prolific_get_default_theme_options' ) ) :
	function prolific_get_default_theme_options() {

		$default_theme_options = array(
			/*header*/
			'prolific-header-top-left-option'          => 'none',
			'prolific-phone-number'                    => '',
			'prolific-top-email'                       => '',
			'prolific-header-top-right-option'         => 'none',
			'prolific-enable-sticky'                   => 1,

			/*feature section options*/
			'prolific-feature-page'                    => 0,
			'prolific-featured-slider-number'          => 2,
			'prolific-enable-feature'                  => '',
			'prolific-feature-slider-enable-animation' => 1,

			/*header options*/
			'prolific-header-id-display-opt'           => 'title-only',
			'prolific-facebook-url'                    => '',
			'prolific-twitter-url'                     => '',
			'prolific-youtube-url'                     => '',
			'prolific-google-plus-url'                 => '',
			'prolific-enable-social'                   => '',

			/*footer options*/
			'prolific-footer-copyright'                => __( '&copy; All right reserved 2016', 'prolific' ),
			'prolific-footer-bg-img'                   => '',

			/*layout/design options*/
			'prolific-hide-front-page-content'         => '',

			'prolific-single-sidebar-layout'           => 'right-sidebar',
			'prolific-front-page-sidebar-layout'       => 'right-sidebar',
			'prolific-archive-sidebar-layout'          => 'right-sidebar',

			'prolific-blog-archive-layout'             => 'full-image',
			'prolific-primary-color'                   => '#e74c3c',

			'prolific-blog-archive-more-text'          => __( 'Read More', 'prolific' ),
			/*theme options*/
			'prolific-search-placholder'               => __( 'Search', 'prolific' ),
			'prolific-store-title'                     => __( 'Store', 'prolific' ),
			'prolific-show-breadcrumb'                 => 0,
		);
		return apply_filters( 'prolific_default_theme_options', $default_theme_options );
	}
endif;


if ( ! function_exists( 'prolific_get_theme_options' ) ) :
	/**
	 * Get theme options
	 *
	 * @since Prolific 1.0.0
	 *
	 * @return array prolific_theme_options
	 */
	function prolific_get_theme_options() {
		static $cached_theme_options = null;

		// Skip cache while in the Customizer.
		if ( null !== $cached_theme_options && ! is_customize_preview() ) {
			return $cached_theme_options;
		}

		$prolific_default_theme_options = prolific_get_default_theme_options();
		$prolific_get_theme_options     = get_theme_mod( 'prolific_theme_options' );

		if ( is_array( $prolific_get_theme_options ) ) {
			$cached_theme_options = array_merge( $prolific_default_theme_options, $prolific_get_theme_options );
		} else {
			$cached_theme_options = $prolific_default_theme_options;
		}

		return $cached_theme_options;
	}
endif;

/**
 * Require init.
 */
require trailingslashit( get_template_directory() ) . 'acmethemes/init.php';
