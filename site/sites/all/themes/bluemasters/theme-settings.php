<?php

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function bluemasters_form_system_theme_settings_alter(&$form, &$form_state) {

    $form['mtt_settings'] = array(
        '#type' => 'fieldset',
        '#title' => t('Bluemasters Theme Settings'),
        '#collapsible' => FALSE,
        '#collapsed' => FALSE,
    );

    $form['mtt_settings']['tabs'] = array(
        '#type' => 'vertical_tabs',
    );

    $form['mtt_settings']['tabs']['slideshow'] = array(
        '#type' => 'fieldset',
        '#title' => t('Slideshow'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );

    $form['mtt_settings']['tabs']['slideshow']['slideshow_display'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show slideshow'),
        '#default_value' => theme_get_setting('slideshow_display','bluemasters'),
    );

    $form['mtt_settings']['tabs']['slideshow']['slideshow_js'] = array(
        '#type' => 'checkbox',
        '#title' => t('Include slideshow javascript code'),
        '#default_value' => theme_get_setting('slideshow_js','bluemasters'),
    );    

    $form['mtt_settings']['tabs']['slideshow']['slideshow_effect'] = array(
        '#type' => 'select',
        '#title' => t('Effects'),
        '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
        '#default_value' => theme_get_setting('slideshow_effect','bluemasters'),
        '#options' => array(
        'slide' => t('Slide'),
        'fade' => t('Fade'),
        ),
    );

    $form['mtt_settings']['tabs']['slideshow']['slideshow_effect_time'] = array(
        '#type' => 'textfield',
        '#title' => t('Slideshow cycling duration (sec)'),
        '#default_value' => theme_get_setting('slideshow_effect_time','bluemasters'),
    );

    $form['mtt_settings']['tabs']['slideshow']['slideshow_animation_time'] = array(
        '#type' => 'textfield',
        '#title' => t('Animation duration (only for Slide effect) (sec)'),
        '#default_value' => theme_get_setting('slideshow_animation_time','bluemasters'),
    );

    $form['mtt_settings']['tabs']['slideshow']['slideshow_random'] = array(
        '#type' => 'checkbox',
        '#title' => t('Randomize slide order'),
        '#default_value' => theme_get_setting('slideshow_random','bluemasters'),
    );

    $form['mtt_settings']['tabs']['slideshow']['slideshow_pause'] = array(
        '#type' => 'checkbox',
        '#title' => t('Pause slideshow on hover'),
        '#default_value' => theme_get_setting('slideshow_pause','bluemasters'),
    );

    $form['mtt_settings']['tabs']['slideshow']['slideshow_controls'] = array(
        '#type' => 'checkbox',
        '#title' => t('Display slideshow controls'),
        '#default_value' => theme_get_setting('slideshow_controls','bluemasters'),
    );

    $form['mtt_settings']['tabs']['slideshow']['slideshow_touch'] = array(
        '#type' => 'checkbox',
        '#title' => t('Allow touch swipe navigation'),
        '#default_value' => theme_get_setting('slideshow_touch','bluemasters'),
    );

    $form['mtt_settings']['tabs']['support']['responsive'] = array(
        '#type' => 'fieldset',
        '#title' => t('Responsive'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );
	
	$form['mtt_settings']['tabs']['support']['responsive']['responsive_menu'] = array(
		'#type' => 'fieldset',
		'#title' => t('Responsive menu'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	
	$form['mtt_settings']['tabs']['support']['responsive']['responsive_menu']['responsive_menu_state'] = array(
		'#type' => 'checkbox',
		'#title' => t('Enable responsive menu'),
		'#description'   => t('Use the checkbox to enable the plugin which transforms the Main menu of your site to a dropdown select list when your browser is at mobile widths.'),
		'#default_value' => theme_get_setting('responsive_menu_state', 'bluemasters'),
	);
	
	$form['mtt_settings']['tabs']['support']['responsive']['responsive_menu']['responsive_menu_switchwidth'] = array(
		'#type' => 'textfield',
		'#title' => t('Switch width (px)'),
		'#description'   => t('Set the width (in pixels) at which the Main menu of the site will change to a dropdown select list.'),
		'#default_value' => theme_get_setting('responsive_menu_switchwidth', 'bluemasters'),
	);
	
	$form['mtt_settings']['tabs']['support']['responsive']['responsive_menu']['responsive_menu_topoptiontext'] = array(
		'#type' => 'textfield',
		'#title' => t('Top option text'),
		'#description'   => t('Set the very first option display text.'),
		'#default_value' => theme_get_setting('responsive_menu_topoptiontext', 'bluemasters'),
	);

    $form['mtt_settings']['tabs']['support']['responsive']['responsive_respond'] = array(
        '#type' => 'checkbox',
        '#title' => t('Add Respond.js JavaScript to add basic CSS3 media query support to IE 6-8.'),
        '#default_value' => theme_get_setting('responsive_respond','bluemasters'),
        '#description'   => t('IE 6-8 require a JavaScript polyfill solution to add basic support of CSS3 media queries. Note that you should enable <strong>Aggregate and compress CSS files</strong> through <em>/admin/config/development/performance</em>.'),
    );

    $form['mtt_settings']['tabs']['support']['responsive']['responsive_meta'] = array(
        '#type' => 'checkbox',
        '#title' => t('Add meta tags to support responsive design on mobile devices.'),
        '#default_value' => theme_get_setting('responsive_meta','bluemasters'),
    );

}