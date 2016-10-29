<?php
/**
 * stb_blog Blog Theme Customizer.
 *
 * @package stb_blog_Blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function stb_blog_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Add section to the Customizer
	$wp_customize->add_section( 'stb_blog-options', array(
		'title' => __( 'Theme Options', 'stb_blog' ),
		'capability' => 'edit_theme_options',
		'description' => __( 'Change the default display options for the theme.', 'stb_blog' ),
	));
	
	// Create sidebar layout setting
	$wp_customize->add_setting(	'layout_setting',
		array(
			'default' => 'no-sidebar',
			'type' => 'theme_mod',
			'sanitize_callback' => 'stb_blog_sanitize_layout', 
			'transport' => 'postMessage'
		)
	);
	// Add sidebar layout controls
	$wp_customize->add_control(	'layout_control',
		array(
			'settings' => 'layout_setting',
			'type' => 'radio',
			'label' => __( 'Sidebar position', 'stb_blog' ),
			'choices' => array(
				'no-sidebar' => __( 'No sidebar (default)', 'stb_blog' ),
				'sidebar-left' => __( 'Left sidebar', 'stb_blog' ),
				'sidebar-right' => __( 'Right sidebar', 'stb_blog' )
			),
			'section' => 'stb_blog-options',
		)
	);
	
	$wp_customize->add_section(
	    'stb_blog_social',
	    array(
	        'title'     => 'Social URLs',
	        'priority'  => 199
	    )
	);
	
	$wp_customize->add_setting('stb_blog_social_behance', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_behance', array('section' => 'stb_blog_social', 'label' => 'Behance', 'text' => 'text'));
	$wp_customize->add_setting('stb_blog_social_bitbucket', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_bitbucket', array('section' => 'stb_blog_social', 'label' => 'Bitbucket', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_codepen', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_codepen', array('section' => 'stb_blog_social', 'label' => 'CodePen', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_deviantart', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_deviantart', array('section' => 'stb_blog_social', 'label' => 'Deviant Art', 'type' => 'text'));	
	$wp_customize->add_setting('stb_blog_social_dribbble', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_dribbble', array('section' => 'stb_blog_social', 'label' => 'Dribbble', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_facebook', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_facebook', array('section' => 'stb_blog_social', 'label' => 'Facebook', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_flickr', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_flickr', array('section' => 'stb_blog_social', 'label' => 'Flickr', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_github', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_github', array('section' => 'stb_blog_social', 'label' => 'GitHub', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_google', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_google', array('section' => 'stb_blog_social', 'label' => 'Google+', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_instagram', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_instagram', array('section' => 'stb_blog_social', 'label' => 'Instagram', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_lastfm', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_lastfm', array('section' => 'stb_blog_social', 'label' => 'LastFM', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_linkedin', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_linkedin', array('section' => 'stb_blog_social', 'label' => 'LinkedIn', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_mail', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_email'));
	$wp_customize->add_control('stb_blog_social_mail', array('section' => 'stb_blog_social', 'label' => 'Email', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_rss', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_rss', array('section' => 'stb_blog_social', 'label' => 'RSS', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_soundcloud', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_soundcloud', array('section' => 'stb_blog_social', 'label' => 'SoundCloud', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_stack_overflow', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_stack_overflow', array('section' => 'stb_blog_social', 'label' => 'Stack Overflow', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_spotify', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_spotify', array('section' => 'stb_blog_social', 'label' => 'Spotify', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_tumblr', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_tumblr', array('section' => 'stb_blog_social', 'label' => 'Tumblr', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_twitter', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_twitter', array('section' => 'stb_blog_social', 'label' => 'Twitter', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_website', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_website', array('section' => 'stb_blog_social', 'label' => 'Website', 'type' => 'text'));
	$wp_customize->add_setting('stb_blog_social_youtube', array('transport' => 'refresh', 'sanitize_callback' => 'stb_blog_sanitize_uri'));
	$wp_customize->add_control('stb_blog_social_youtube', array('section' => 'stb_blog_social', 'label' => 'Youtube', 'type' => 'text'));
	
}
add_action( 'customize_register', 'stb_blog_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function stb_blog_customize_preview_js() {
	wp_enqueue_script( 'stb_blog_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'stb_blog_customize_preview_js' );

/**
 * Sanitize layout options
 */
function stb_blog_sanitize_layout( $value ) {
	if ( !in_array( $value, array( 'sidebar-left', 'sidebar-right', 'no-sidebar' ) ) ) {
		$value = 'no-sidebar';
	}
	return $value;
}
/**
 * Sanitize URIs
 */
function stb_blog_sanitize_uri($uri){
	if('' === $uri){
		return '';
	}
	return esc_url_raw($uri);
}
/**
 * Sanitize email/uri
 */
function stb_blog_sanitize_email($uri){
	if('' === $uri){
		return '';
	}
	if (substr( $uri, 0, 4 ) != 'http' && strpos($uri, '@') === false) {
		$uri = 'mailto:' . $uri;
	}
	return sanitize_email($uri);
}