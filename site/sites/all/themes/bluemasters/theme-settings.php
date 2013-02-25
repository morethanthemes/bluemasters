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

    $form['mtt_settings']['support']['responsive'] = array(
        '#type' => 'fieldset',
        '#title' => t('Responsive'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );

    $form['mtt_settings']['support']['responsive']['responsive_respond'] = array(
        '#type' => 'checkbox',
        '#title' => t('Add Respond.js JavaScript to add basic CSS3 media query support to IE 6-8.'),
        '#default_value' => theme_get_setting('responsive_respond','bluemasters'),
        '#description'   => t('IE 6-8 require a JavaScript polyfill solution to add basic support of CSS3 media queries. Note that you should enable <strong>Aggregate and compress CSS files</strong> through <em>/admin/config/development/performance</em>.'),
    );

    $form['mtt_settings']['support']['responsive']['responsive_meta'] = array(
        '#type' => 'checkbox',
        '#title' => t('Add meta tags to support responsive design on mobile devices.'),
        '#default_value' => theme_get_setting('responsive_meta','bluemasters'),
    );

}