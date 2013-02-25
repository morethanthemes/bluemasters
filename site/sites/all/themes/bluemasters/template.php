<?php 


/**
 * Add javascript files for front-page jquery slideshow.
 */
if (drupal_is_front_page()) {
drupal_add_js(drupal_get_path('theme', 'bluemasters') . '/js/bluemasters.js');
}

/** 
* Override or insert variables into the html template. 
*/ 
function bluemasters_preprocess_html(&$variables) {
	if (!theme_get_setting('responsive_respond','bluemasters')):
	drupal_add_css(path_to_theme() . '/css/basic-layout.css', array('group' => CSS_THEME, 'browsers' => array('IE' => '(lte IE 8)&(!IEMobile)', '!IE' => FALSE), 'preprocess' => FALSE));
	endif;
}



/**
 * Page alter.
 */
function bluemasters_page_alter($page) {

	if (theme_get_setting('responsive_meta','bluemasters')):
		$mobileoptimized = array(
			'#type' => 'html_tag',
			'#tag' => 'meta',
			'#attributes' => array(
			'name' =>  'MobileOptimized',
			'content' =>  'width'
			)
		);

		$handheldfriendly = array(
			'#type' => 'html_tag',
			'#tag' => 'meta',
			'#attributes' => array(
			'name' =>  'HandheldFriendly',
			'content' =>  'true'
			)
		);

		$viewport = array(
			'#type' => 'html_tag',
			'#tag' => 'meta',
			'#attributes' => array(
			'name' =>  'viewport',
			'content' =>  'width=device-width, initial-scale=1'
			)
		);

		drupal_add_html_head($mobileoptimized, 'MobileOptimized');
		drupal_add_html_head($handheldfriendly, 'HandheldFriendly');
		drupal_add_html_head($viewport, 'viewport');
	endif;
}


?>
