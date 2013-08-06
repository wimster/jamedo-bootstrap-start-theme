<?php

/* Call function to register sidebars */
add_action( 'widgets_init', 'skematik_widgets_init' );

/* Create function to register sidebars. @since skematik 1.0 */
function skematik_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Left Content Sidebar', 'jamedo-bootstrap-start-theme' ),
		'id' => 'left-content-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Right Content Sidebar', 'jamedo-bootstrap-start-theme' ),
		'id' => 'right-content-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	/*$ftr_widgets = get_theme_mod( 'footer_widgets_number', 4 );

	if($ftr_widgets > 0) {
		register_sidebar( array(
			'name' => __( 'Footer Widget One', 'jamedo-bootstrap-start-theme' ),
			'id' => 'footer-widget-one',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		) );
	}
	
	if($ftr_widgets > 1) {
		register_sidebar( array(
			'name' => __( 'Footer Widget Two', 'jamedo-bootstrap-start-theme' ),
			'id' => 'footer-widget-two',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		) );
	}
	
	if($ftr_widgets > 2) {
		register_sidebar( array(
			'name' => __( 'Footer Widget Three', 'jamedo-bootstrap-start-theme' ),
			'id' => 'footer-widget-three',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		) );
	}
	
	if($ftr_widgets > 3) {
		register_sidebar( array(
			'name' => __( 'Footer Widget Four', 'jamedo-bootstrap-start-theme' ),
			'id' => 'footer-widget-four',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		) );
	}*/
}
