<?php
/**
 * Custom Search Form
 *
 * @package Acme Themes
 * @subpackage Prolific
 */
?>
<div class="search-block">
	<form action="<?php echo esc_url( home_url() ); ?>" class="searchform" id="searchform" method="get" role="search">
		<div>
			<label for="menu-search" class="screen-reader-text"></label>
			<?php
			$prolific_customizer_all_values = prolific_get_theme_options();
			$placeholder_text               = '';
			if ( isset( $prolific_customizer_all_values['prolific-search-placholder'] ) ) :
				$placeholder_text = ' placeholder="' . esc_attr( $prolific_customizer_all_values['prolific-search-placholder'] ) . '" ';
			endif;
			?>
			<input type="text" <?php echo esc_attr( $placeholder_text ); ?> class="menu-search" id="menu-search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>">
			<button class="searchsubmit fa fa-search" type="submit" id="searchsubmit"></button>
		</div>
	</form>
</div>
