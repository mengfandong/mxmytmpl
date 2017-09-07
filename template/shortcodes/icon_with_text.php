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
if(!function_exists('icon_with_text_sc')) {
	function icon_with_text_sc( $atts, $content="" ) {
	
		extract(shortcode_atts(array(
			  	'name' => 'home',
				'content_title' => '',
				'title_color' => '',
				'readmore_text' => 'Read More',
				'readmore_link' => '#',
			   	'size' => '',
				'position' => '',
				'content' => '',
				'style' =>'',
			   	'color' => '',
			   	'class' =>""
		 ), $atts));
		 
		 $options = 'style="';
		 $options .= ($size) ? 'font-size:'. (int) $size .'px;' : '';
		 $options .= ($color) ? 'color:'. $color . ';': '';
		  $options .= ($size) ? 'width:'. (int) $size . 'px;': '';
		  $options .= ($size) ? 'height:'. (int) $size . 'px;': '';
		 $options .='"';
		 
		return '<div class="text_with_icon '. $position .' "><span class="text_with_icon_icon '. $style .'" ><i ' . $options . ' class="fa fa-' . str_replace( 'fa-', '', $name ) . ' ' . $class . '"  ></i></span><div class="content_title" style="color:'. $title_color .'">'. $content_title .'</div><div class="text_with_icon_content">'  . $content .'</div><a href="'. $readmore_link .'">'. $readmore_text .'</a></div>';
	 
	}
		
	add_shortcode( 'icon_with_text', 'icon_with_text_sc' );
}



