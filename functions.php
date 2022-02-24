<?php
// WP Default Style Remove
add_action('wp_enqueue_scripts', 'remove_my_global_styles');
function remove_my_global_styles()
{
  wp_dequeue_style('global-styles');
}
//  Post Remove
function remove_menus()
{
  global $menu;
  remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_menus');
