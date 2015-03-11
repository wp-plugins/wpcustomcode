<?php

/**
 * @package WP.Custom.Code
 * @version 1.0
 */

add_action( 'tf_create_options', 'wp_custom_code_options' );

function wp_custom_code_options() {

    $tmpFramework = TitanFramework::getInstance( 'wp-custom-code' );

    $tmpPanel = $tmpFramework->createAdminPanel( array(
        'name' => 'WP Custom Code',
        'title' => 'WordPress Custom Code',
        'desc' => 'Add your custom HTML/CSS/JS code into all of pages & posts <div style="height: 10px;"></div>',
        'parent' => 'options-general.php',
        'position' => 100,
    ));
    
    $tmpPanel->createOption( array(
        'name' => 'Into the Header',
        'id' => 'global_header',
        'type' => 'code',
        'desc' => 'Will be putted right before the &lt;/head&gt; tag.',
        'lang' => 'html',
    ) );    
    
    $tmpPanel->createOption( array(
        'name' => 'Into the Footer',
        'id' => 'global_footer',
        'type' => 'code',
        'desc' => 'Will be putted right before the &lt;/body&gt; tag.',
        'lang' => 'html',
    ) );   
 
    $tmpPanel->createOption( array(
        'type' => 'save'
    ));
    
}