<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_call_to_action','sp_call_to_action_addon');

function sp_call_to_action_addon($atts){

	extract(spAddonAtts(array(
		"title" 				=> '',
		"heading_selector" 		=> 'h3',
		"title_fontsize" 		=> '',
		"title_fontweight" 		=> '',
		"text_transform" 		=> '',
		"title_text_color" 		=> '',
		"title_margin_top" 		=> '',
		"title_margin_bottom" 	=> '',	
		"subtitle_fontsize" 	=> '',		
		"subtitle" 				=> '',
		"subtitle_text_color" 	=> '',
		"text" 					=> '',
		"background" 			=> '',
		"hover_border" 			=> '',
		"color" 				=> '',
		"padding" 				=> '',
		"button_text"			=> '',
		"button_url"			=> '',
		"button_size"			=> '',
		"button_type"			=> '',
		"button_icon"			=> '',
		"button_block"			=> '',
		"button_target"			=> '',
		"button2_text"			=> '',
		"button2_url"			=> '',
		"button2_type"			=> '',
		"button2_icon"			=> '',
		"button2_target"			=> '',
		"button_position"		=> '',
		"class"=>'',
		), $atts));

	$style = '';

	if($button_icon) {
		$button_text = '<i class="fa ' . $button_icon . '"></i> ' . $button_text;
	}
	
	if($button2_icon) {
		$button2_text = '<i class="fa ' . $button2_icon . '"></i> ' . $button2_text;
	}

	if($background) {
		$style .= 'background-color: ' . $background . ';padding:25px 40px;';
	}

	if($color) {
		$style .= 'color: ' . $color . ';';
	}

	if($padding) {
		$style .= 'padding: ' . $padding .';';
	}

	$button_output = '<a target="' . $button_target . '" href="' . $button_url . '" class="sppb-btn sppb-btn-' . $button_type . ' sppb-btn-' . $button_size . ' ' . $button_block . '" role="button">' . $button_text . '</a>';
	
	$button2_output = '<a target="' . $button2_target . '" href="' . $button2_url . '" class="sppb-btn sppb-btn-' . $button2_type . ' sppb-btn-' . $button_size . ' ' . $button_block . '" role="button">' . $button2_text . '</a>';
	
	

	$output  = '<div class="sppb-addon sppb-addon-cta ' . $class . ' '. $hover_border .'" style="' . $style . '">';

	if($button_position=='right') {

		$output .= '<div class="sppb-row">';

		$output .= '<div class="sppb-col-sm-9">';

		if($title) {

			$title_style = '';
			if($title_margin_top !='') $title_style .= 'margin-top:' . (int) $title_margin_top . 'px;';
			if($title_margin_bottom !='') $title_style .= 'margin-bottom:' . (int) $title_margin_bottom . 'px;';
			if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
			if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
			if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
			if($text_transform) $title_style .= 'text-transform:'.$text_transform.';';

			$output .= '<'.$heading_selector.' class="sppb-cta-title" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';
		}

		if($subtitle) {

			$subtitle_style = '';

			if($subtitle_text_color) $subtitle_style .= 'color:' . $subtitle_text_color  . ';';
			if($subtitle_fontsize) $subtitle_style .= 'font-size:'.$subtitle_fontsize.'px;line-height:'.$subtitle_fontsize.'px;"';
			
			$output .= '<p class="sppb-lead sppb-cta-subtitle" style="' . $subtitle_style . '">' . $subtitle . '</p>';
		}		


		if($text) $output .= '<p class="sppb-cta-text">' . $text . '</p>';
		
		$output .= '</div>';

		$output .= '<div class="sppb-col-sm-3 sppb-text-right">';
		
		if ($button_text) {
		$output .= $button_output;
		}
		if ($button2_text) {
		$output .= $button2_output;
		}
		
		$output .= '</div>';

		$output .= '</div>';


	} else {

		$output .= '<div class="text-center">';

		if($title) {

			$title_style = '';
			if($title_margin_top) $title_style .= 'margin-top:' . (int) $title_margin_top . 'px;';
			if($title_margin_bottom) $title_style .= 'margin-bottom:' . (int) $title_margin_bottom . 'px;';
			if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
			if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
			if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
			if($text_transform) $title_style .= 'text-transform:'.$text_transform.';';
			$output .= '<'.$heading_selector.' class="sppb-cta-title" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';
		}

		if($subtitle) {

			$subtitle_style = '';

			if($subtitle_text_color) $subtitle_style .= 'color:' . $subtitle_text_color  . ';';
			if($subtitle_fontsize) $subtitle_style .= 'font-size:'.$subtitle_fontsize.'px;line-height:'.$subtitle_fontsize.'px;"';
			
			$output .= '<p class="sppb-lead sppb-cta-subtitle" style="' . $subtitle_style . '">' . $subtitle . '</p>';
		}	

		if($text) $output .= '<p class="sppb-cta-text">' . $text . '</p>';
		
		$output .= '<div>';
		if ($button_text) {
		$output .= $button_output;
		}
		if ($button2_text) {
		$output .= $button2_output;
		}
		$output .= '</div>';
		
		$output .= '</div>';

	}

	$output .= '</div>';

	return $output;

}