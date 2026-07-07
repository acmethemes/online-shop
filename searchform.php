<?php
/**
 * Custom Searchform
 *
 * @package Acme Themes
 * @subpackage Online Shop
 */
?>
<div class="search-block">
	<form action="<?php echo esc_url( home_url() ); ?>" class="searchform" id="searchform" method="get" role="search">
		<div>
			<label for="menu-search" class="screen-reader-text"></label>
			<?php
			$online_shop_customizer_all_values = online_shop_get_theme_options();
			$placeholder_text                  = '';
			if ( isset( $online_shop_customizer_all_values['online-shop-search-placeholder'] ) ) :
				$placeholder_text = ' placeholder="' . esc_attr( $online_shop_customizer_all_values['online-shop-search-placeholder'] ) . '" ';
			endif;
			?>
			<input type="text" <?php echo esc_attr( $placeholder_text ); ?> id="menu-search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>">
			<button class="fa fa-search" type="submit" id="searchsubmit"></button>
		</div>
	</form>
</div>
