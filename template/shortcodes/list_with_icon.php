<?php
/**
 * @package Helix Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2014 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/
//no direct accees
defined ('_JEXEC') or die('resticted aceess');

//[Icon]
if(!function_exists('list_with_icon_sc')) {

	function list_with_icon_sc( $atts, $content="" ) {
	
		extract(shortcode_atts(array(
			   'name' => '',
			   'size' => '',
			   'icons' => '',
			   'color' => '',
			   'class' =>""
		 ), $atts));
		 
		 $options = 'style="';
		 $options .= ($size) ? 'font-size:'. (int) $size .'px;' : '';
		 $options .= ($color) ? 'color:'. $color . ';': '';
		 $options .='"';
		 
		return '<div class="list_icon" style="font-size:'. (int) $size .'px"> <i ' . $options . ' class="fa ' . $icons . ' ' . $class . '"></i> ' . $name . '</div>';
	 
	}
		
	add_shortcode( 'list_with_icon', 'list_with_icon_sc' );
}