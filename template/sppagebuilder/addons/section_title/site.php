<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_section_title','sp_section_title_addon');

function sp_section_title_addon($atts){

	extract(spAddonAtts(array(
		"title"					=>'',
		"heading_selector" 		=> 'h3',
		"title_fontfamily" 		=> '',
		"heading_transform"		=> '',
		"title_fontsize" 		=> '',
		"title_fontweight" 		=> '',
		"title_text_color" 		=> '',
		"title_margin_top" 		=> '',
		"title_margin_bottom" 	=> '',
		"title_divider" 		=> '',
		"divider_left_color" 	=> '',
		"divider_right_color" 	=> '',
		"divider_height" 		=> '',
		"divider_width" 		=> '',
		"divider_bottom_margin" 		=> '',
		"text"					=>'',
		"content_color"					=>'',
		"text_lineheight"		=>'',
		"alignment"				=>'',
		"content_margin_bottom"				=>'',
		'class'					=>'',
		), $atts));

	
	$output  = '<div class="sppb-addon sppb-addon-section-title  ' . $class . '" style="text-align:' . $alignment . ';">';
	
	if($title) {

		$title_style = '';
		if($title_margin_top !='') $title_style .= 'margin-top:' . (int) $title_margin_top . 'px;';
		if($title_margin_bottom !='') $title_style .= 'margin-bottom:' . (int) $title_margin_bottom . 'px;';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
		if($heading_transform) $title_style .= 'text-transform:'.$heading_transform.';';
		if($title_fontfamily) $title_style .= 'font-family:'. $title_fontfamily .';';
		

		$output .= '<'.$heading_selector.' class="sppb-section-title " style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';
	}
	
	if($title_divider == 'yes') {
		$output .='<div class="title_divider" style="margin-bottom:'. $divider_bottom_margin .'px"><div class="divider_inner" style="height:'. $divider_height .';width:'. $divider_width .';"><div class="left" style="background:'. $divider_left_color .'"></div><div class="right" style="background:'. $divider_right_color .'"></div></div></div>';
	}
	
	$output .= '<div class="sppb-section-content" style="color:'. $content_color .'; line-height:'. $text_lineheight .'px; margin-bottom:'. $content_margin_bottom .'px;">';
	$output .= $text;
	$output .= '</div>';
	
	$output .= '</div>';

	return $output;
}