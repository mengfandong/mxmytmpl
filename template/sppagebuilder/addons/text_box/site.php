<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_text_box','sp_text_box_addon');

function sp_text_box_addon($atts){

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
		"text_color"			=>'',
		"text_hover_color"		=>'',
		"text_box_padding"		=>'',
		"text_box_margin"		=>'',
		"text_box_bg_color"		=>'',
		"text_box_hover_bg_color"		=>'',
		"text_box_border_color"		=>'',
		"text_box_hover_border_color"		=>'',
		"text_size"				=>'',
		"text_fontweight"		=>'',
		"text_style"			=>'',
		"text_lineheight"		=>'',
		"alignment"				=>'',
		"text_box_border_width"				=>'',
		"text_box_border_style"				=>'',
		'class'					=>'',
		), $atts));





	$uniqueid = uniqid();
	
	
	$doc = JFactory::getDocument();
		$box_style_hover = '.sppb-text-box-'. $uniqueid .' .sppb-addon-content:hover {';
		$box_style_hover	.= 'background-color:'. $text_box_hover_bg_color .' !important;';
		$box_style_hover	.= 'color:'. $text_hover_color .' !important;';
		$box_style_hover	.= 'border-color:'. $text_box_hover_border_color .' !important;';
		$box_style_hover	.= '}';

		$doc->addStyleDeclaration($box_style_hover);
		
		
	
	$box_style = '';
	if($text_color) $box_style .= 'color:' . $text_color  . ';';
	if($text_box_padding) $box_style .= 'padding:' . $text_box_padding  . ';';
	if($text_box_margin) $box_style .= 'margin:' . $text_box_margin  . ';';
	if($text_box_bg_color) $box_style .= 'background:' . $text_box_bg_color  . ';';
	if($text_box_border_width) $box_style .= 'border:' . $text_box_border_width  . 'px '.$text_box_border_style.' '.$text_box_border_color.';';
	if($text_size) $box_style .= 'font-size:' . $text_size . 'px;';
	if($text_fontweight) $box_style .= 'font-weight:' . $text_fontweight . ';';
	if($text_style) $box_style .= 'font-style:' . $text_style . ';';
	if($text_lineheight) $box_style .= 'line-height:' . $text_lineheight. 'px;';
	if($alignment) $box_style .= 'text-align:' . $alignment. ';';
	
	
	
	$output  = '<div class="sppb-addon sppb-addon-text-box sppb-text-box-'. $uniqueid .' ' . $class . '">';
	
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
	
	
	
	
	$output .= '<div class="sppb-addon-content" style="'. $box_style .'">';
	$output .= $text;
	$output .= '</div>';
	
	$output .= '</div>';

	return $output;
}