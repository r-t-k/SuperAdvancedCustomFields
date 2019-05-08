<?php


function load_SACF_base() // Classes :: Hook = init
{
	foreach ( glob( __DIR__ . 'wp-content/plugins/abstract/' . "super-advanced-custom-fields/Base/*.php" ) as $class ) {
		require $class;
	}
}

add_action( 'acf/init', 'load_SACF_base', 20 );

function load_SACF_fields() // Classes :: Hook = init
{
	foreach ( glob( __DIR__ . 'wp-content/plugins/abstract/' . "super-advanced-custom-fields/Fields/*.php" ) as $class ) {
		require $class;
	}
}

add_action( 'acf/init', 'load_SACF_fields', 30 );

function load_SACF_template() // Classes :: Hook = init
{
	foreach ( glob( __DIR__ . 'wp-content/plugins/abstract/' . "super-advanced-custom-fields/template/*.php" ) as $class ) {
		require $class;
	}
}

add_action( 'acf/init', 'load_SACF_template', 40 );
