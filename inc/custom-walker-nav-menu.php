<?php
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
  function start_lvl(&$output, $depth = 0, $args = array())
  {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"sub-menu absolute top-full left-0 text-xs bg-dark-main pointer-events-none opacity-0 list-none p-0 m-0 transition group-hover/parent-menu:!opacity-100 group-hover/parent-menu:pointer-events-auto\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;
    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = $class_names ? ' class="group/parent-menu is-parent-menu relative ' . esc_attr($class_names) . '"' : '';
    $output .= $indent . '<li' . $class_names . '>';
    $attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
    $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
    $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';

    // Apply different classes based on the depth
    if ($depth === 0) {
      $attributes .= ' class="nav-link text-white px-3 py-4 md:py-2 md:rounded-md hover:!text-primary-main transition font-medium menu--hover-effect-overlay"';
    } else {
      $attributes .= ' class="submenu-link inline-block text-gray-300 px-3 py-3 transition hover:!text-primary-main"';
    }

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
