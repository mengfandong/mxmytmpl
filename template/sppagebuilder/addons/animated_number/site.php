<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_animated_number','sp_animated_number_addon');

function sp_animated_number_addon($atts){

	extract(spAddonAtts(array(
		'number'			=> '',
		'pre_symbol'			=> '',
		'post_symbol'			=> '',
		'duration'			=> '',
		'font_size'			=> '',
		'font_weight'			=> '',
		'border_color' 		=> '',
		'border_hover_color' 		=> '',
		'border_width' 		=> '',
		'border_radius' 	=> '',
		'color' 			=> '',
		'color_hover' 			=> '',
		'background' 		=> '',
		'background_hover' 		=> '',
		'counter_title' 	=> '',
		'title_font_size'	=> '',
		"title_fontweight" 			=> '',
		"title_top_margin" 			=> '',
		"title_bottom_margin" 		=> '',
		"heading_transform" 		=> '',
		'counter_color' 	=> '',
		'counter_hover_color' 	=> '',
		'alignment'			=> '',
		'display_inline'			=> '',
		'class'				=>'',
		), $atts));

	$uniqueid = uniqid();
	
	$doc = JFactory::getDocument();
		$style_hover 					 = '.animated-number-'. $uniqueid .' .sppb-addon-content:hover {';
		$style_hover					.= 'background-color:'. $background_hover .' !important;';
		$style_hover					.= 'border-color:'. $border_hover_color .' !important;';
		$style_hover					.= '}';
	
	
		$text_style_hover 				 = '.animated-number-'. $uniqueid .' .sppb-addon-content:hover .sppb-animated-number-title {';
		$text_style_hover				.= 'color:'. $counter_hover_color .' !important;';
		$text_style_hover				.= '}';
	
		$sppb_animated_number_hover 	 = '.animated-number-'. $uniqueid .' .sppb-addon-content:hover span {';
		$sppb_animated_number_hover		.= 'color:'. $color_hover .' !important;';
		$sppb_animated_number_hover		.= '}';
	
	
	
	$doc->addStyleDeclaration($style_hover);
	$doc->addStyleDeclaration($text_style_hover);
	$doc->addStyleDeclaration($sppb_animated_number_hover);
	

	$style 			= '';
	$number_style 	= '';
	$text_style 	= '';



	if($background) $class .= $class . ' sppb-hasbg';

	if($background) $style .= 'background-color:' . $background  . ';';
	if($border_color) $style .= 'border-style:solid;border-color:' . $border_color  . ';';
	if($border_width) $style .= 'border-width:' . (int) $border_width  . 'px;';
	if($border_radius) $style .= 'border-radius:' . (int) $border_radius  . 'px;';
	if($display_inline) $style .= 'display:' . $display_inline  . ';';

	if($color) $number_style .= 'color:' . $color  . ';';
	if($font_size) $number_style .= 'font-size:' . (int) $font_size . 'px;line-height:' . (int) $font_size . 'px;';
	if($font_weight) $number_style .= 'font-size:' . $font_weight . ';';
	
	
	if($counter_color) $text_style .= 'color:' . $counter_color  . ';';
	if($title_font_size) $text_style .= 'font-size:' . (int) $title_font_size . 'px;line-height:' . (int) $title_font_size . 'px;';
	if($title_fontweight) $text_style .= 'font-weight:'.$title_fontweight.';';
	if($title_top_margin) $text_style .= 'margin-top:'.$title_top_margin.';';
	if($title_bottom_margin) $text_style .= 'margin-bottom:'.$title_bottom_margin.';';
	if($heading_transform) $text_style .= 'text-transform:'.$heading_transform.';';
	

	$output  = '<div class="sppb-addon sppb-addon-animated-number animated-number-'. $uniqueid .' '. $alignment . ' ' . $class .'">';

	$output .= '<div class="sppb-addon-content" style="' . $style . '">';
	$output .= '<span style="'. $number_style .'">'. $pre_symbol .'</span><span class="sppb-animated-number" data-digit="'. $number .'" data-duration="' . $duration . '" style="'. $number_style .'">0</span><span style="'. $number_style .'">'. $post_symbol .'</span>';
	if($counter_title) $output .= '<div class="sppb-animated-number-title" style="' . $text_style . '">' . $counter_title . '</div>';
	$output .= '</div>';

	$output .= '</div>';

	return $output;
	
}