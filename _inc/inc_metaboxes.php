<?php

/**
 * @package WP.Custom.Code
 * @version 1.0
 */

add_action( 'tf_create_options', 'wp_custom_code_metaboxes' );

function wp_custom_code_metaboxes() {

    $tmpFramework = TitanFramework::getInstance( 'wp-custom-code' );

    $tmpMetaboxes = $tmpFramework->createMetaBox( array(
        'name' => 'WordPress Custom Code',
        'desc' => 'Add your custom HTML/CSS/JS code into this article',
        'post_type' => array( 'page', 'post' ),
    ));
 
    $tmpMetaboxes->createOption( array(
        'name' => 'Into the Header',
        'id' => 'local_header',
        'type' => 'code',
        'desc' => 'Will be putted right before the &lt;/head&gt; tag.',
        'lang' => 'html',
    ) );    
    
    $tmpMetaboxes->createOption( array(
        'name' => 'Into the Footer',
        'id' => 'local_footer',
        'type' => 'code',
        'desc' => 'Will be putted right before the &lt;/body&gt; tag.',
        'lang' => 'html',
    ) );  
    
}