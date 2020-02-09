<?php
/**
 * fiercelyGrey Theme Customizer
 *
 * @package fiercelyGrey
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fiercelygrey_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'fiercelygrey_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'fiercelygrey_customize_partial_blogdescription',
		) );
  }

  /**
   * Choose excerpt or full content on blog.
   */
  $wp_customize->add_section( 'fiercelygrey_layout_section' , array( 
    'title'       => esc_html__( 'Blog', 'fiercelygrey' ),
    'priority'    => 38,  
    'description' => 'Change how posts displays', 
  ));

  $wp_customize->add_setting( 'fiercelygrey_post_content', array( 
    'default'	        => 'option1',
    'sanitize_callback' => 'fiercelygrey_sanitize_index_content',
  ));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fiercelygrey_post_content', array(
    'label'    => esc_html__( 'Post content', 'fiercelygrey' ),
    'section'  => 'fiercelygrey_layout_section',
    'settings' => 'fiercelygrey_post_content',
    'type'     => 'radio',
    'choices'  => array(
      'option1' => 'Excerpts',
      'option2' => 'Full content',
      ), 
  )));
}
add_action( 'customize_register', 'fiercelygrey_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function fiercelygrey_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function fiercelygrey_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function fiercelygrey_customize_preview_js() {
	wp_enqueue_script( 'fiercelygrey-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'fiercelygrey_customize_preview_js' );
