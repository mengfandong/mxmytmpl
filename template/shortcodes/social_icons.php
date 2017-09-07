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
if(!function_exists('social_icons_sc')) {

	function social_icons_sc( $atts, $content="" ) {
	
		extract(shortcode_atts(array(
			   'name' => 'home',
			   'size' => '',
			   'color' => '',
			   'link' => '#',
			   'class' =>""
		 ), $atts));
		 
		 $options = 'style="';
		 $options .= ($size) ? 'font-size:'. (int) $size .'px;' : '';
		 $options .= ($color) ? 'color:'. $color . ';': '';
		 $options .='"';
		 
		return '<a href="' . $link . '" class="social_icons"><i ' . $options . ' class="icon-' . str_replace( 'icon-', '', $name ) . ' ' . $class . '"></i></a>' . $content;
	 
	}
		
	add_shortcode( 'social_icons', 'social_icons_sc' );
}