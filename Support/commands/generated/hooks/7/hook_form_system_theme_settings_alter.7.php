/**
 * Implements hook_form_system_theme_settings_alter().
 */
function <?php print $basename; ?>_form_system_theme_settings_alter(&\$form, &\$form_state) {
  ${1:// Add a checkbox to toggle the breadcrumb trail.
  \$form['toggle_breadcrumb'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display the breadcrumb'),
    '#default_value' => theme_get_setting('toggle_breadcrumb'),
    '#description'   => t('Show a trail of links from the homepage to the current page.'),
  );}
}

$2