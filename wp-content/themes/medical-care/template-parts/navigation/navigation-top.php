<?php
/**
 * Displays top navigation
 *
 * @subpackage Medical Care
 * @since 1.0
 */
?>

<div id="gb_responsive" class="nav side_gb_nav">
	<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'medical-care' ); ?>">
		<?php
		    wp_nav_menu( array( 
				'theme_location' => 'primary',
				'container_class' => 'gb_navigation clearfix' ,
				'menu_class' => 'clearfix',
				'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				'fallback_cb' => 'wp_page_menu',
		    ) ); 
		?>
		<a href="javascript:void(0)" class="closebtn gb_menu" onclick="medical_care_gb_Menu_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','medical-care'); ?></span></a>
	</nav>
</div>