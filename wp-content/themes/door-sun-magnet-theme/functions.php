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


function doorSunScripts()
{
	wp_enqueue_style('bootstrap',DS_TDU . '/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome',DS_TDU . '/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap-select',DS_TDU . '/css/bootstrap-select.css');
	wp_enqueue_style('doorsun-style',DS_TDU . '/style.css');
	wp_enqueue_style('responsive',DS_TDU . '/css/responsive.css');

	wp_enqueue_script('jqurey',DS_TDU . '/js/jquery-1.12.2.min.js',array('jquery'),'1',true);
	wp_enqueue_script('simple-timer',DS_TDU . '/js/jquery.simple.timer.js',array('jquery'),'1',true);
	wp_enqueue_script('bootstrap',DS_TDU . '/js/bootstrap.min.js',array('jquery'),'1',true);
	wp_enqueue_script('bootstrap-select',DS_TDU . '/js/bootstrap-select.js',array('jquery','bootstrap'),'1',true);
	wp_enqueue_script('doorsun-script',DS_TDU . '/js/index.js',array('jquery'),'1',true);

}
add_action('wp_enqueue_scripts','doorSunScripts');



function doorSunWidgetsInit()
{
	register_sidebar(array(
		'name'=>'فوتر',
		'id'=>'wg_footer',
		'before_widget'=>'<div class="col-md-3">',
		'after_widget'=>'</div>',
		'before_title'=>'<h4>',
		'after_title'=>'</h4>',

	));
}
add_action('widgets_init', 'doorSunWidgetsInit');
