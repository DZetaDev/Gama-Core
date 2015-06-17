<?php

namespace gama_core_dl_menu;

/**
 * Class gama_dl_walker_nav_menu
 * @package    Gama_Core
 * @subpackage Gama_Core/includes
 * @author     DZeta <dzeta.webdev@gmail.com>
 */

class class_gama_core_dl_menu extends \Walker_Nav_Menu {
	/**
	 * @since    0.7.0
	 * @param string $output Add class .dl-submenu for children items
	 * @param int $depth This parameter controls how many levels in the hierarchy of pages are to be included in the list generated
	 * @param array $args Parameter default
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= "<ul class='dl-submenu sub-menu'>";
	}
}