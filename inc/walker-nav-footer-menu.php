<?php
class Custom_Walker_Footer_Menu extends Walker_Nav_Menu
{
  function start_lvl(&$output, $depth = 0, $args = array())
  {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"sub-menu hidden\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;
    $classes[] = 'list-none ';
    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
    $output .= $indent . '<li' . $class_names . '>';
    $attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
    $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
    $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
    $attributes .= ' class="text-sm text-white hover:!text-primary-main transition"';
    $item_output = isset($args->before) ? $args->before : '';
    $item_output .= '<a' . $attributes . '>';
    $item_output .= isset($args->link_before) ? $args->link_before : '';
    $item_output .= apply_filters('the_title', $item->title, $item->ID);
    $item_output .= isset($args->link_after) ? $args->link_after : '';
    $item_output .= '</a>';
    $item_output .= isset($args->after) ? $args->after : '';
    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
