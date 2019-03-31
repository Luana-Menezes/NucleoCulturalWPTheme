<?php 

function m1_customize_register( $wp_customize) {
	$wp_customize->add_settings( 'm1_logo' ); //add setting for logo uploader 

	//add control for logo uploader  (actual uploader)
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
		'label'    => __( 'Logo do site', 'm1' ),
		'section'  => 'title_tagline',
		'settings' => 'm1_logo',
	) ) );
}

add_action( 'customize_register', 'm1_customize_register' );

?>