<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_progress_bar','sp_progress_bar_addon');

function sp_progress_bar_addon($atts, $content){

	extract(spAddonAtts(array(
		"type" 				=> '',
		"progress" 			=> '',
		"text" 				=> '',
		"text_color" 		=> '',
		"text_margin" 		=> '',
		"progress_bottom_margin" 		=> '',
		"stripped"			=>'',
		"active"			=>'',
		"progress_height"	=>'',
		"progress_color"	=>'',
		"progress_bg_color"	=>'',
		"class"				=>''
		), $atts));
	

	if($text) {
		$output = '<div class="progress_bar_main"><div class="progress_bar_text" style="color:'. $text_color .'; margin:'. $text_margin .'"><span class="progress_text">' . $text . '</span><span class="progress_percent">'. $progress .'%</span></div>';
	}
	$output .= '<div class="sppb-progress ' . $class . '" style="height:'. $progress_height .'px; background-color:'. $progress_bg_color .'; margin-bottom:'. $progress_bottom_margin .'px">';
	$output .= '<div class="sppb-progress-bar ' . $type . ' ' . $stripped . ' ' . $active . '" role="progressbar" aria-valuenow="' . (int) $progress . '" aria-valuemin="0" aria-valuemax="100" data-width="' . (int) $progress . '%" style="background-color:'. $progress_color .'">';

	
	
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';

	return $output;
	
}