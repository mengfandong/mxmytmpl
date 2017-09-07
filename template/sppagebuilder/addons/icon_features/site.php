<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_icon_features','sp_icon_features_addon');

function sp_icon_features_addon($atts){

	extract(spAddonAtts(array(
		"title1"				=> '',
		'icon_name1' 			=> '',
		'link1' 			 	=> '',
		"title2"				=> '',
		'icon_name2' 			=> '',
		'link2' 			 	=> '',
		"title3"				=> '',
		'icon_name3' 			=> '',
		'link3' 			 	=> '',
		"heading_selector" 		=> 'h3',
		"title_fontsize" 		=> '',
		"title_fontweight" 		=> '',
		"title_text_color" 		=> '',
		"title_position"		=> 'before',
		
		'icon_size' 			=> '',
		'icon_border_width' 	=> '',
		'icon_border_radius' 	=> '',
		'icon_style' 			=> '',
		'icon_margin_top' 		=> '',
		'icon_margin_bottom' 	=> '',
		'icon_padding' 			=> '',
		'alignment' 			=> '',
		'class'					=> '',
		), $atts));

	


	//Icon or Image
	
	if($icon_name1) {
			$style = 'text-align:center;';
			$font_size = '';
			$media1 = '';
			if($icon_padding) $style .= 'padding:' . (int) $icon_padding  . 'px;';
			if($icon_border_width) $style .= 'border-width:' . (int) $icon_border_width  . 'px;';
			if($icon_border_radius) $style .= 'border-radius:' . (int) $icon_border_radius  . 'px;';
			if($icon_size) $font_size .= 'font-size:' . (int) $icon_size . 'px;width:' . (int) $icon_size . 'px;height:' . (int) $icon_size . 'px;line-height:' . (int) $icon_size . 'px;';
			$media1  .= '<div class="sppb-icon" style="margin-top:'. $icon_margin_top .'px; margin-bottom:' . $icon_margin_bottom . 'px;">';
			$media1  .= '<span style="display:inline-block;' . $style . ';">';
			$media1  .= '<i class="fa ' . $icon_name1 . '" style="' . $font_size . ';"></i>';
			$media1  .= '</span>';
			$media1  .= '</div>';
		}

	//Title
	$feature_title1 = '';
	if($title1) {

		$title_style = '';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
		
		$feature_title1 .= '<'.$heading_selector.' class="sppb-step-box-title" style="' . $title_style . '">' . $title1 . '</'.$heading_selector.'>';
	

	}
	
	
	if($icon_name2) {
			$style = 'text-align:center;';
			$font_size = '';
			$media2 = '';
			if($icon_padding) $style .= 'padding:' . (int) $icon_padding  . 'px;';
			if($icon_border_width) $style .= 'border-width:' . (int) $icon_border_width  . 'px;';
			if($icon_border_radius) $style .= 'border-radius:' . (int) $icon_border_radius  . 'px;';
			if($icon_size) $font_size .= 'font-size:' . (int) $icon_size . 'px;width:' . (int) $icon_size . 'px;height:' . (int) $icon_size . 'px;line-height:' . (int) $icon_size . 'px;';
			$media2  .= '<div class="sppb-icon" style="margin-top:'. $icon_margin_top .'px; margin-bottom:' . $icon_margin_bottom . 'px;">';
			$media2  .= '<span style="display:inline-block;' . $style . ';">';
			$media2  .= '<i class="fa ' . $icon_name2 . '" style="' . $font_size . ';"></i>';
			$media2  .= '</span>';
			$media2  .= '</div>';
		}

	//Title
	$feature_title2 = '';
	if($title2) {

		$title_style = '';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
		$feature_title2 .= '<'.$heading_selector.' class="sppb-step-box-title" style="' . $title_style . '">' . $title2 . '</'.$heading_selector.'>';
		

	}

	if($icon_name3) {
			$style = 'text-align:center;';
			$font_size = '';
			$media3 = '';
			if($icon_padding) $style .= 'padding:' . (int) $icon_padding  . 'px;';
			if($icon_border_width) $style .= 'border-width:' . (int) $icon_border_width  . 'px;';
			if($icon_border_radius) $style .= 'border-radius:' . (int) $icon_border_radius  . 'px;';
			if($icon_size) $font_size .= 'font-size:' . (int) $icon_size . 'px;width:' . (int) $icon_size . 'px;height:' . (int) $icon_size . 'px;line-height:' . (int) $icon_size . 'px;';
			$media3  .= '<div class="sppb-icon" style="margin-top:'. $icon_margin_top .'px; margin-bottom:' . $icon_margin_bottom . 'px;">';
			$media3  .= '<span style="display:inline-block;' . $style . ';">';
			$media3  .= '<i class="fa ' . $icon_name3 . '" style="' . $font_size . ';"></i>';
			$media3  .= '</span>';
			$media3  .= '</div>';
		}

	//Title
	$feature_title3 = '';
	if($title3) {

		$title_style = '';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
		$feature_title3 .= '<'.$heading_selector.' class="sppb-step-box-title" style="' . $title_style . '">' . $title3 . '</'.$heading_selector.'>';

	}
	
	
	
	
	//Output
	$output  = '<div class="sppb-addon sppb-addon-icon-feature ' . $alignment . ' ' . $class . '">';
	$output .= '<div class="sppb-addon-content" >';
	
	$output .= '<div class="sppb-row">';
	
	
	$output .= '<div class="sppb-icon-feature1 sppb-icon-feature sppb-col-sm-4" >';
	$output .= '<div class="sppb-icon-feature-inner" >';
	$output .= $media1 ;
	$output .= $feature_title1;
	$output .= '<div class="readmore"><a href="'. $link1 .'">Read More</a></div>';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '<div class="sppb-icon-feature2 sppb-icon-feature sppb-col-sm-4" >';
	$output .= '<div class="sppb-icon-feature-inner" >';
	$output .= $media2 ;
	$output .= $feature_title2;
	$output .= '<div class="readmore"><a href="'. $link2 .'">Read More</a></div>';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '<div class="sppb-icon-feature3 sppb-icon-feature sppb-col-sm-4" >';
	$output .= '<div class="sppb-icon-feature-inner" >';
	$output .= $media3 ;
	$output .= $feature_title3;
	$output .= '<div class="readmore"><a href="'. $link3 .'">Read More</a></div>';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';

	return $output;
}