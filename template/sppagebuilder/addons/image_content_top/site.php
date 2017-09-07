<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_image_content_top','sp_image_content_top_addon');

function sp_image_content_top_addon($atts){

	extract(spAddonAtts(array(
		"image" 				=> '',
		"image_width" 			=> '',
		"title" 				=> '',
		"heading_selector" 		=> 'h3',
		"title_fontsize" 		=> '',
		"title_fontweight" 		=> '',
		"title_transform" 		=> '',
		"title_text_color" 		=> '',
		"title_margin_top" 		=> '',
		"title_margin_bottom" 	=> '',	
		"text" 					=> '',
		"button_text"			=> '',
		"button_url"			=> '',
		"button_size"			=> '',
		"button_type"			=> '',
		"button_icon"			=> '',
		"button_block"			=> '',
		"button_target"			=> '',
		"class"=>'',
		), $atts));


	


	if($image && $title) {

		$output  = '<div class="sppb-addon sppb-addon-image-content-top clearfix ' . $class . '">';

		//Image
		$output .= '<div  class="sppb-image">';
		
		$output .= '<img src="' . JURI::base(true) . '/' . $image . '">';
		
		$output .= '</div>';

		//Content
		$output .= '<div class="sppb-content">';
		$output .= '<div class="sppb-content-holder">';

		$title_style = '';
		if($title_margin_top !='') $title_style .= 'margin-top:' . (int) $title_margin_top . 'px;';
		if($title_margin_bottom !='') $title_style .= 'margin-bottom:' . (int) $title_margin_bottom . 'px;';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
		if($title_transform) $title_style .= 'text-transform:'.$title_transform.';';

		$output .= '<'.$heading_selector.' class="sppb-image-content-title" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';

		if($text) $output .= '<p class="sppb-image-content-text">' . $text . '</p>';

		if($button_icon) {
			$button_text = '<i class="fa ' . $button_icon . '"></i> ' . $button_text;
		}

		if($button_text) {
			$output .= '<a target="' . $button_target . '" href="' . $button_url . '" class="sppb-btn sppb-btn-' . $button_type . ' sppb-btn-' . $button_size . ' ' . $button_block . '" role="button">' . $button_text . '</a>';
		}

		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';
		

		return $output;
	}

	return;

}