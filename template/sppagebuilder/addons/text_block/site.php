<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_text_block','sp_text_block_addon');

function sp_text_block_addon($atts){

	extract(spAddonAtts(array(
		"title"					=>'',
		"heading_selector" 		=> 'h3',
		"heading_transform"		=> '',
		"title_border" 			=> '',
		"title_fontsize" 		=> '',
		"title_fontweight" 		=> '',
		"title_text_color" 		=> '',
		"title_margin_top" 		=> '',
		"title_margin_bottom" 	=> '',
		"text"					=>'',
		"text_lineheight"		=>'',
		"alignment"				=>'',
		'class'					=>'',
		), $atts));

	
	$output  = '<div class="sppb-addon sppb-addon-text-block ' . $alignment . ' ' . $class . '">';
	
	if($title) {

		$title_style = '';
		if($title_margin_top !='') $title_style .= 'margin-top:' . (int) $title_margin_top . 'px;';
		if($title_margin_bottom !='') $title_style .= 'margin-bottom:' . (int) $title_margin_bottom . 'px;';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
		if($heading_transform) $title_style .= 'text-transform:'.$heading_transform.';';
		

		$output .= '<'.$heading_selector.' class="sppb-addon-title '. $title_border .'" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';
	}
	
	$output .= '<div class="sppb-addon-content" style="line-height:'. $text_lineheight .'px;">';
	$output .= $text;
	$output .= '</div>';
	
	$output .= '</div>';

	return $output;
}