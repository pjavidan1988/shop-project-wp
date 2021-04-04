
<?php
/**
 * This snippet has been updated to reflect the official supporting of options pages by CMB2
 * in version 2.2.5.
 *
 * If you are using the old version of the options-page registration,
 * it is recommended you swtich to this method.
 */
add_action( 'cmb2_admin_init', 'doorSun_register_theme_options_metabox' );
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function doorSun_register_theme_options_metabox() {

	/**
	 * Registers options page menu item and form.
	 */
	$cmb_options = new_cmb2_box( array(
		'id'           => 'doorSun_option_metabox',
		'title'        => 'تنظیمات قالب',
		'object_types' => array( 'options-page' ),

		/*
		 * The following parameters are specific to the options-page box
		 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
		 */

		'option_key'      => 'doorSun_options', // The option key and admin menu page slug.
		// 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
		// 'menu_title'      => esc_html__( 'Options', 'doorSun' ), // Falls back to 'title' (above).
		// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
		// 'capability'      => 'manage_options', // Cap required to view options-page.
		// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
		// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
		// 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
		// 'save_button'     => esc_html__( 'Save Theme Options', 'doorSun' ), // The text for the options-page save button. Defaults to 'Save'.
	) );

	/*
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */




	// Set our CMB2 fields
	$group_field_id = $cmb_options->add_field( array(
		'id'          => 'header_sec',
		'type'        => 'group',
		'repeatable'  => false,
		'options'     => array(
			'group_title'       => 'تنظیمات header',
		),
	) );

	$cmb_options->add_group_field( $group_field_id, array(
		'name' => 'متن بالای سایت',
		'id'   => 'top_text',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $group_field_id, array(
		'name' => 'لوگوی سایت',
		'id'   => 'logo',
		'type' => 'file',
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'آپلود فایل' // Change upload button text. Default: "Add or Upload File"
		),
	) );

	// social
	$doorsun_social_group = $cmb_options->add_field( array(
		'id'          => 'doorsun_social_group',
		'type'        => 'group',
		'description' => '',
		'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => "شبکه های اجتماعی",
		),
	) );

	$cmb_options->add_group_field( $doorsun_social_group, array(
		'name' => 'فیسبوک',
		'id'   => 'facebook',
		'type' => 'text_url',
	) );

	$cmb_options->add_group_field( $doorsun_social_group, array(
		'name' => 'توییتر',
		'id'   => 'twitter',
		'type' => 'text_url',
	) );

	$cmb_options->add_group_field( $doorsun_social_group, array(
		'name' => 'اینستاگرام',
		'id'   => 'instagram',
		'type' => 'text_url',
	) );

	$cmb_options->add_group_field( $doorsun_social_group, array(
		'name' => 'تلگرام',
		'id'   => 'telegram',
		'type' => 'text_url',
	) );




	// index slider

	$cmb_options->add_field( array(
		'name' => 'اسلایدر صفحه اصلی',
		'type' => 'title',
		'id'   => 'doorsun_slider'
	) );

	$doorsun_slider_group = $cmb_options->add_field( array(
		'id'          => 'doorsun_slider_group',
		'type'        => 'group',
		'description' => '',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => "اسلایدر صفحه اصلی {#}",
			'add_button'    => "افزودن اسلایدر جدید",
			'remove_button' => "حذف اسلاید",
			'sortable'      => true, // beta
		),
	) );

	$cmb_options->add_group_field( $doorsun_slider_group, array(
		'name' => 'عنوان',
		'id'   => 'title',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_slider_group, array(
		'name' => 'توضیح',
		'id'   => 'desc',
		'type' => 'textarea_small',
	) );

	$cmb_options->add_group_field( $doorsun_slider_group, array(
		'name' => 'متن دکمه چپ',
		'id'   => 'first_button',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_slider_group, array(
		'name' => 'لینک دکمه چپ',
		'id'   => 'first_button_link',
		'type' => 'text_url',
	) );

	$cmb_options->add_group_field( $doorsun_slider_group, array(
		'name' => 'متن دکمه راست',
		'id'   => 'second_button',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_slider_group, array(
		'name' => 'لینک دکمه راست',
		'id'   => 'second_button_link',
		'type' => 'text_url',
	) );

	$cmb_options->add_group_field( $doorsun_slider_group, array(
		'name' => 'عکس اسلاید',
		'id'   => 'image',
		'type' => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'انتخاب عکس' // Change upload button text. Default: "Add or Upload File"
		),
	) );

	// index support section

	$cmb_options->add_field( array(
		'name' => 'بخش سرویس های صفحه اصلی',
		'type' => 'title',
		'id'   => 'doorsun_services'
	) );

	$doorsun_service_group = $cmb_options->add_field( array(
		'id'          => 'doorsun_service_group',
		'type'        => 'group',
		'description' => '',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => "آیتم {#}",
			'add_button'    => "افزودن آیتم جدید",
			'remove_button' => "حذف آیتم",
			'sortable'      => true, // beta
		),
	) );

	$cmb_options->add_group_field( $doorsun_service_group, array(
		'name' => 'عنوان',
		'id'   => 'title',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_service_group, array(
		'name' => 'زیرعنوان',
		'id'   => 'subtitle',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_service_group, array(
		'name' => 'نام آیکون',
		'id'   => 'fa_icon',
		'desc' =>'<a target="_balnk" href="http://fontawesome.io/3.2.1/icons/">انتخاب آیکون</a>',
		'type' => 'text',
	) );


	// index customer section

	$cmb_options->add_field( array(
		'name' => 'نظر مشتری',
		'type' => 'title',
		'id'   => 'doorsun_customer'
	) );

	$doorsun_customer_group = $cmb_options->add_field( array(
		'id'          => 'doorsun_customer_group',
		'type'        => 'group',
		'description' => '',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => "آیتم {#}",
			'add_button'    => "افزودن آیتم جدید",
			'remove_button' => "حذف آیتم",
			'sortable'      => true, // beta
		),
	) );

	$cmb_options->add_group_field( $doorsun_customer_group, array(
		'name' => 'توضیح',
		'id'   => 'desc',
		'type' => 'textarea_small',
	) );

	$cmb_options->add_group_field( $doorsun_customer_group, array(
		'name' => 'نام',
		'id'   => 'name',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_customer_group, array(
		'name' => 'عکس',
		'id'   => 'image',
		'type' => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'انتخاب عکس' // Change upload button text. Default: "Add or Upload File"
		),
	) );

	// index ads section

	$cmb_options->add_field( array(
		'name' => 'تبلیغات صفحه اصلی',
		'type' => 'title',
		'id'   => 'doorsun_ads'
	) );

	$doorsun_ads_group = $cmb_options->add_field( array(
		'id'          => 'doorsun_ads_group',
		'type'        => 'group',
		'description' => '',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => "آیتم {#}",
			'add_button'    => "افزودن آیتم جدید",
			'remove_button' => "حذف آیتم",
			'sortable'      => true, // beta
		),
	) );

	$cmb_options->add_group_field( $doorsun_ads_group, array(
		'name' => 'عنوان تبلیغ',
		'id'   => 'title',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_ads_group, array(
		'name' => 'لینک تبلیغ',
		'id'   => 'link',
		'type' => 'text_url',
	) );

	$cmb_options->add_group_field( $doorsun_ads_group, array(
		'name' => 'عکس تبلیغ',
		'id'   => 'image',
		'type' => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'انتخاب عکس' // Change upload button text. Default: "Add or Upload File"
		),
	) );

	// index support section

	$cmb_options->add_field( array(
		'name' => 'پشتیبان ها',
		'type' => 'title',
		'id'   => 'doorsun_support'
	) );

	$doorsun_support_group = $cmb_options->add_field( array(
		'id'          => 'doorsun_support_group',
		'type'        => 'group',
		'description' => '',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => "آیتم {#}",
			'add_button'    => "افزودن آیتم جدید",
			'remove_button' => "حذف آیتم",
			'sortable'      => true, // beta
		),
	) );

	$cmb_options->add_group_field( $doorsun_support_group, array(
		'name' => 'لینک',
		'id'   => 'link',
		'type' => 'text_url',
	) );

	$cmb_options->add_group_field( $doorsun_support_group, array(
		'name' => 'عکس',
		'id'   => 'image',
		'type' => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'انتخاب عکس' // Change upload button text. Default: "Add or Upload File"
		),
	) );

	// Pre order section

	$doorsun_preorder_group = $cmb_options->add_field( array(
		'id'          => 'doorsun_preorder_group',
		'type'        => 'group',
		'description' => '',
		'repeatable'  => false,
		'options'     => array(
			'group_title'   => "پیش سفارش",
		),
	) );

	$cmb_options->add_group_field( $doorsun_preorder_group, array(
		'name' => 'عنوان پیش سفارش',
		'id'   => 'title',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_preorder_group, array(
		'name' => 'متن پیش سفارش',
		'id'   => 'desc',
		'type' => 'textarea_small',
	) );

	$cmb_options->add_group_field( $doorsun_preorder_group, array(
		'name' => 'Contact Shortcode',
		'id'   => 'contact_form',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_preorder_group, array(
		'name' => 'عکس',
		'id'   => 'image',
		'type' => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'انتخاب عکس' // Change upload button text. Default: "Add or Upload File"
		),
	) );




	// index middle slider

	$cmb_options->add_field( array(
		'name' => 'اسلایدر وسط صفحه',
		'type' => 'title',
		'id'   => 'doorsun_slider_middle'
	) );

	$doorsun_slider_middle_group = $cmb_options->add_field( array(
		'id'          => 'doorsun_slider_middle_group',
		'type'        => 'group',
		'description' => '',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => "اسلایدر وسط صفحه {#}",
			'add_button'    => "افزودن اسلایدر جدید",
			'remove_button' => "حذف اسلاید",
			'sortable'      => true, // beta
		),
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'عنوان',
		'id'   => 'title1',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'توضیح',
		'id'   => 'desc1',
		'type' => 'textarea_small',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'متن دکمه راست',
		'id'   => 'first_button1',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'لینک دکمه راست',
		'id'   => 'first_button_link1',
		'type' => 'text_url',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'متن دکمه چپ',
		'id'   => 'second_button1',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'لینک دکمه چپ',
		'id'   => 'second_button_link1',
		'type' => 'text_url',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'عکس اسلاید',
		'id'   => 'image1',
		'type' => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'انتخاب عکس' // Change upload button text. Default: "Add or Upload File"
		),
	) );



	//product 2
	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'عنوان',
		'id'   => 'title2',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'توضیح',
		'id'   => 'desc2',
		'type' => 'textarea_small',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'متن دکمه راست',
		'id'   => 'first_button2',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'لینک دکمه راست',
		'id'   => 'first_button_link2',
		'type' => 'text_url',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'متن دکمه چپ',
		'id'   => 'second_button2',
		'type' => 'text',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'لینک دکمه چپ',
		'id'   => 'second_button_link2',
		'type' => 'text_url',
	) );

	$cmb_options->add_group_field( $doorsun_slider_middle_group, array(
		'name' => 'عکس اسلاید',
		'id'   => 'image2',
		'type' => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'انتخاب عکس' // Change upload button text. Default: "Add or Upload File"
		),
	) );




	//footer
	$doorsun_footer_group = $cmb_options->add_field( array(
		'id'          => 'doorsun_footer_group',
		'type'        => 'group',
		'description' => '',
		'repeatable'  => false,
		'options'     => array(
			'group_title'   => "فوتر",
		),
	) );

	$cmb_options->add_group_field( $doorsun_footer_group, array(
		'name' => 'کپی رایت',
		'id'   => 'copy',
		'type' => 'text',
	) );

}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function doorSun_get_option( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		// Use cmb2_get_option as it passes through some key filters.
		return cmb2_get_option( 'doorSun_options', $key, $default );
	}

	// Fallback to get_option if CMB2 is not loaded yet.
	$opts = get_option( 'doorSun_options', $default );

	$val = $default;

	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}

	return $val;
}
