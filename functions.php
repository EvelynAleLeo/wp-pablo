<?php

function init_common_elements() {
	register_sidebar( array(
		'name' => __( 'Cortes Sidebar', 'cortes' ),
		'id' => 'sidebar-1',
		'description' => __( 'Barra de herramientas principal de Cortes Theme', 'underwood' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="sidebar_widget">',
		'after_widget' => '</div></section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
    ) );
    
}









add_action( 'widgets_init', 'init_common_elements' );