<?php
define("DS_TDU", get_template_directory_uri());


function doorsunSetup(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	register_nav_menus(
		array(
			'top'=>'منوی بالا',
			'main'=>'منوی اصلی'
		)
	);
}
add_action('after_setup_theme', "doorsunSetup");
