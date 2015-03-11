<?php

/**
 * @package WP.Custom.Code
 * @version 1.0
 */

/**
 * Working with wp_head() action
 */

add_action( 'wp_head', 'wp_custom_code_wp_head', 250 );

function wp_custom_code_wp_head() {
 
    // Getting in touch with Titan Framework
    $tmpFramework = TitanFramework::getInstance( 'wp-custom-code' );
    
    // Getting the Global Header custom code
    $tmpOutput = $tmpFramework->getOption( 'global_header' );
    
    // Getting the Local Header custom code
    if ( is_page() || is_single() ) {
    
        // Append the Local Header custom code
        $tmpOutput = $tmpOutput . $tmpFramework->getOption( 'local_header', get_the_ID() );
        
    }
    
    // Print the combination of custom code
    echo $tmpOutput;
    
}

/**
 * Working with wp_footer() action
 */

add_action( 'wp_footer', 'wp_custom_code_wp_footer', 250 );

function wp_custom_code_wp_footer() {
 
    // Getting in touch with Titan Framework
    $tmpFramework = TitanFramework::getInstance( 'wp-custom-code' );
    
    // Getting the Global Footer custom code
    $tmpOutput = $tmpFramework->getOption( 'global_footer' );
    
    // Getting the Local Footer custom code
    if ( is_page() || is_single() ) {
    
        // Append the Local Footer custom code
        $tmpOutput = $tmpOutput . $tmpFramework->getOption( 'local_footer', get_the_ID() );
        
    }
    
    // Print the combination of custom code
    echo $tmpOutput;
    
}