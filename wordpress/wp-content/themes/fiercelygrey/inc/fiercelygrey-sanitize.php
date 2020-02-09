<?php
/**
 * fiercelygrey Theme Customizer 
 *
 * @package fiercelygrey
 */


/**
 * Sanitizes our post content value (either excerpts or full post content).
 */

function fiercelygrey_sanitize_index_content( $content ) {
	if ( 'option2' == $content ) {
		return 'option2';
	} else {
		return 'option1';
	} 
}