<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_flip_box','sp_flip_box_addon');

function sp_flip_box_addon($atts){

	extract(spAddonAtts(array( 
		"icon" 					=> '',
		"icon_size" 			=> '',
		"icon_color" 			=> '',
		"icon_background" 		=> '',
		"icon_border_color" 	=> '',
		"icon_border_width" 	=> '',
		"icon_padding" 	=> '',
		"title" 				=> '',
		"heading_selector" 		=> 'h3',
		"title_fontsize" 		=> '',
		"title_fontweight" 		=> '',
		"title_transform" 		=> '',
		"title_text_color" 		=> '',
		"title_margin_top" 		=> '',
		"title_margin_bottom" 	=> '',
		"short_text"			=> '',
		"front_text_color"		=> '',
		"back_text_color"		=> '',
		"front_bg_color"		=> '',
		"back_bg_color"			=> '',
		"box_border_color"		=> '',
		"box_border_width"		=> '',
		"text" 					=> '',
		"button_text"			=> '',
		"button_url"			=> '',
		"button_target"			=> '',
		"class"=>'',
		), $atts));


		$title_style = '';
		
		if($title_margin_bottom !='') $title_style .= 'margin-bottom:' . (int) $title_margin_bottom . 'px;';
		if($icon_background) $title_style .= 'color:' . $icon_background  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
		if($title_transform) $title_style .= 'text-transform:'.$title_transform.';';
		
		
		$title_color = '';
		if($title_text_color) $title_color .= 'color:'.$title_text_color.';';
		if($title_margin_top !='') $title_color .= 'margin-top:' . (int) $title_margin_top . 'px;';
		
		$icon_wh ='';
		$icon_wh .= ($icon_border_width * 2) + ($icon_padding * 2) + $icon_size;
		
		
		
		$icon_style ='';
		if($icon_color) $icon_style .= 'color:' . $icon_color  . ';';
		if($icon_size) $icon_style .= 'font-size:' . $icon_size  . 'px; line-height:' . $icon_size  . 'px;';
		if($icon_padding) $icon_style .= 'padding:' . $icon_padding  . 'px;';
		if($icon_background) $icon_style .= 'background:' . $icon_background  . ';';
		if($icon_border_color) $icon_style .= 'border-color:' . $icon_border_color  . ';';
		if($icon_border_width) $icon_style .= 'border-width:' . $icon_border_width  . 'px;';
		if($icon_padding) $icon_style .= 'width:' . $icon_wh  . 'px;height:' . $icon_wh  . 'px;';
		
		
		$front_box_style = '';
		if($box_border_color) $front_box_style .= 'border-color:' . $box_border_color  . ';';
		if($box_border_width) $front_box_style .= 'border-width:' . $box_border_width  . ';';
		if($front_bg_color) $front_box_style .= 'background:' . $front_bg_color  . ';';
		if($front_text_color) $front_box_style .= 'color:' . $front_text_color  . ';';
		

		$output   = '<div class="sppb-addon sppb-addon-flip-box clearfix ' . $class . '">';
		$output  .= '<div class="sppb-addon-flip-box-inner">';
		$output  .= '<div  class="sppb-flip-box-front" style="'. $front_box_style .'">';
		
		$output  .= '<div class="sppb-icon ">';
		$output  .= '<span style="display:inline-block;' . $icon_style . ';">';
		$output  .= '<i class="fa ' . $icon . '"></i>';
		$output  .= '</span>';
		$output  .= '</div>';
		
		$output .= '<'.$heading_selector.' class="sppb-flip-box-title" style="' . $title_style . $title_color .'">' . $title . '</'.$heading_selector.'>';

		if($short_text) $output .= '<p class="sppb-flip-box-short-text">' . $short_text . '</p>';
		
		$output .= '</div>';

		//Content
		$output .= '<div class="sppb-flip-box-back" style="background:'.$back_bg_color.'; color:'.$back_text_color.';">';
		$output .= '<div class="sppb-content-holder">';

		$output .= '<'.$heading_selector.' class="sppb-flip-box-title" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';

		if($text) $output .= '<p class="sppb-flip-box-text">' . $text . '</p>';

		if($button_text) {
			$output .= '<a target="' . $button_target . '" href="' . $button_url . '" class="sppb-btn sppb-btn-white" role="button">' . $button_text . '</a>';
		}

		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';
		

		return $output;

}